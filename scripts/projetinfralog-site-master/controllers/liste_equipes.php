<?php

$page_name = "Projet Infra Logiciel";
$short_page_name = "Liste des équipes";

$smarty->assign('page_name', $page_name);
$smarty->assign('short_page_name', $short_page_name);

global $database;
$nb_equipes = $database->count("equipes");
$smarty->assign('nb_equipes', $nb_equipes);

$equipes = $database->select("equipes", ["id_equipe", "nom_equipe"]);
$smarty->assign('equipes', $equipes);
?>