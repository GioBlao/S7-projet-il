<div class="wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
            {foreach $equipes as $equipe}
                <div class="col-lg-6">
                        <div class="card card-navy card-outline">
                            <div class="card-header">
                                <h5 class="m-0">{$equipe['nom_equipe']}</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Statistiques de l'équipe {$equipe['nom_equipe']}</p>
                                <a href="index.php?page=equipe&nom_equipe={$equipe['nom_equipe']}&id_equipe={$equipe['id_equipe']}" class="btn bg-navy">Voir les statistiques</a>
                            </div>
                        </div>
                    </div>
            {/foreach}        
            </div>
        </div>
    </div>
</div>