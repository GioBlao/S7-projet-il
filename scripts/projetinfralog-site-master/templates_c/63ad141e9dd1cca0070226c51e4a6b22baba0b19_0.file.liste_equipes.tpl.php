<?php
/* Smarty version 4.3.4, created on 2024-01-13 16:08:16
  from 'C:\Users\mateo\OneDrive\Documents\Scolaire\ESEO\S7\Projet Infra Logiciel (Local) (code)\Site web\tpl\pages\liste_equipes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a2b570509fe0_17490189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63ad141e9dd1cca0070226c51e4a6b22baba0b19' => 
    array (
      0 => 'C:\\Users\\mateo\\OneDrive\\Documents\\Scolaire\\ESEO\\S7\\Projet Infra Logiciel (Local) (code)\\Site web\\tpl\\pages\\liste_equipes.tpl',
      1 => 1705162093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a2b570509fe0_17490189 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['equipes']->value, 'equipe');
$_smarty_tpl->tpl_vars['equipe']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['equipe']->value) {
$_smarty_tpl->tpl_vars['equipe']->do_else = false;
?>
                <div class="col-lg-6">
                        <div class="card card-navy card-outline">
                            <div class="card-header">
                                <h5 class="m-0"><?php echo $_smarty_tpl->tpl_vars['equipe']->value['nom_equipe'];?>
</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Statistiques de l'équipe <?php echo $_smarty_tpl->tpl_vars['equipe']->value['nom_equipe'];?>
</p>
                                <a href="index.php?page=equipe&nom_equipe=<?php echo $_smarty_tpl->tpl_vars['equipe']->value['nom_equipe'];?>
&id_equipe=<?php echo $_smarty_tpl->tpl_vars['equipe']->value['id_equipe'];?>
" class="btn bg-navy">Voir les statistiques</a>
                            </div>
                        </div>
                    </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>        
            </div>
        </div>
    </div>
</div><?php }
}
