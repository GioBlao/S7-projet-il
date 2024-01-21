$(function () {
    $("#table_statistiques").DataTable({
        language: {
            url: "assets/language/fr-FR.json"
        },
        ajax: {
            url: '../../controllers/datatables/editor_statistiques.php',
            type: 'POST'
        },
        pageLength: 10,
        lengthMenu: [[5, 10, 12, -1], [5, 10, 12, "Tous"]],
        scrollCollapse: true,
        scrollY: 500,
        scrollX: true,
        autoWidth: false,
        colReorder: true,

        fixedColumns: {
            left: 1
        },

        dom: "<'row'<'col-sm-12 col-md-9'lB><'col-sm-12 col-md-3'>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",

        buttons: [
            // Empêche les deux premières colonnes d'être désactivées par le 'colvis' (checkbox de sélection et id)
            { extend: 'colvis', columns: 'th:nth-child(n+2)', className: 'bg-navy' }
        ],

        columns: [
            { data: 'joueurs.nom_joueur' },
            { data: 'statistiques.lf_reussi' }, 
            { data: 'statistiques.lf_rate' },
            { data: 'statistiques.2pts_reussi' },
            { data: 'statistiques.2pts_rate' },
            { data: 'statistiques.3pts_reussi' },
            { data: 'statistiques.3pts_rate' },
            { data: 'statistiques.passe_decisive' },
            { data: 'statistiques.rebond_off' },
            { data: 'statistiques.rebond_def' },
            { data: 'statistiques.interception' },
            { data: 'statistiques.contre' },
            { data: 'statistiques.perte_balle' },
            { data: 'statistiques.fautes' }
        ],

        order: [[1, 'asc']]
    });
});