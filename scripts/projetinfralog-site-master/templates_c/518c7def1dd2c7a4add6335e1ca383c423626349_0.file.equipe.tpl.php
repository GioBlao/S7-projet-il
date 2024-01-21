<?php
/* Smarty version 4.3.4, created on 2024-01-13 16:22:02
  from 'C:\Users\mateo\OneDrive\Documents\Scolaire\ESEO\S7\Projet Infra Logiciel (Local) (code)\Site web\tpl\pages\equipe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a2b8aa0d1a19_34419444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '518c7def1dd2c7a4add6335e1ca383c423626349' => 
    array (
      0 => 'C:\\Users\\mateo\\OneDrive\\Documents\\Scolaire\\ESEO\\S7\\Projet Infra Logiciel (Local) (code)\\Site web\\tpl\\pages\\equipe.tpl',
      1 => 1705162913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a2b8aa0d1a19_34419444 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-navy">
                    <div class="card-header">
                        <h3 class="card-title">Liste des matchs de l'équipe <?php echo $_smarty_tpl->tpl_vars['equipe']->value;?>

                        </h3>
                    </div>
                    <div class="card-body">
                        <table id="liste_matchs" class="table table-bordered table-striped hover display"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>id_match</th>
                                    <th>date</th>
                                    <th>equipe1</th>
                                    <th>equipe2</th>
                                    <th>score_equipe1</th>
                                    <th>score_equipe2</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>id_match</th>
                                    <th>date</th>
                                    <th>equipe1</th>
                                    <th>equipe2</th>
                                    <th>score_equipe1</th>
                                    <th>score_equipe2</th>
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
