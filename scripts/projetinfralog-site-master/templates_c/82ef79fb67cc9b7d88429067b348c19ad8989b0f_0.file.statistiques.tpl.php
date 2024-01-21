<?php
/* Smarty version 4.3.4, created on 2024-01-17 18:00:44
  from 'C:\Users\mateo\OneDrive\Documents\Scolaire\ESEO\S7\Projet Infra Logiciel (Local) (code)\Site web\tpl\pages\statistiques.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a815ccbe4e73_18948401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82ef79fb67cc9b7d88429067b348c19ad8989b0f' => 
    array (
      0 => 'C:\\Users\\mateo\\OneDrive\\Documents\\Scolaire\\ESEO\\S7\\Projet Infra Logiciel (Local) (code)\\Site web\\tpl\\pages\\statistiques.tpl',
      1 => 1705514443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a815ccbe4e73_18948401 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-navy">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo $_smarty_tpl->tpl_vars['equipe1']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['score_equipe1']->value;?>
) - <?php echo $_smarty_tpl->tpl_vars['equipe2']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['score_equipe2']->value;?>
) | (<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
)</h3>
                    </div>
                    <div class="card-body">
                        <table id="table_statistiques" class="table table-bordered table-striped hover display"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>Joueur</th>
                                    <th>lf_reussi</th>
                                    <th>lf_rate</th>
                                    <th>2pts_reussi</th>
                                    <th>2pts_rate</th>
                                    <th>3pts_reussi</th>
                                    <th>3pts_rate</th>
                                    <th>passe_decisive</th>
                                    <th>rebond_off</th>
                                    <th>rebond_def</th>
                                    <th>interception</th>
                                    <th>contre</th>
                                    <th>perte_balle</th>
                                    <th>fautes</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Joueur</th>
                                    <th>lf_reussi</th>
                                    <th>lf_rate</th>
                                    <th>2pts_reussi</th>
                                    <th>2pts_rate</th>
                                    <th>3pts_reussi</th>
                                    <th>3pts_rate</th>
                                    <th>passe_decisive</th>
                                    <th>rebond_off</th>
                                    <th>rebond_def</th>
                                    <th>interception</th>
                                    <th>contre</th>
                                    <th>perte_balle</th>
                                    <th>fautes</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><?php }
}
