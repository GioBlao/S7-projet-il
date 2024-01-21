$(function () {
    $("#liste_matchs").DataTable({
        language: {
            url: "assets/language/fr-FR.json"
        },
        ajax: {
            url: '../../controllers/datatables/editor_matchs.php',
            type: 'POST'
        },
        pageLength: 100,
        lengthMenu: [[25, 50, 75, 100, 200, 500, 1000, -1], [25, 50, 75, 100, 200, 500, 1000, "Tous"]],
        scrollCollapse: true,
        scrollY: 500,
        scrollX: true,
        autoWidth: false,
        colReorder: true,

        select: {
            style: 'os',
            selector: 'td:first-child'
        },
        fixedColumns: {
            left: 2
        },

        dom: "<'row'<'col-sm-12 col-md-9'lB><'col-sm-12 col-md-3'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",

        buttons: [
            // Empêche les deux premières colonnes d'être désactivées par le 'colvis' (checkbox de sélection et id)
            { extend: 'colvis', columns: 'th:nth-child(n+2)', className: 'bg-navy' },
            { extend: "searchBuilder", className: 'bg-navy' }
        ],

        columns: [
            // La première ligne sert à empêcher les erreurs à cause de la colonne supplémentaire pour la colonne de sélection 
            { data: 'matchs.id_match' },
            { data: 'matchs.date' },
            { data: 'matchs.equipe1' },
            { data: 'matchs.equipe2' },
            { data: 'matchs.score_equipe1' },
            { data: 'matchs.score_equipe2' }
        ],

        order: [[1, 'asc']],

        columnDefs:
        [
            {
                "targets": 0,
                "data": "download_link",
                "render": function (data, type, row, meta) {
                    //console.log('<a href="' + data + '">' + data + '</a>');
                    return '<a href="index.php?page=statistiques&id_match=' + data + '">' + data + '</a>';
                    }
           }
        ],
    });
});