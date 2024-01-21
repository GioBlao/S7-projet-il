<?php

$page_name = "Projet Infra Logiciel";
$short_page_name = "Statistiques du match";

$smarty->assign('page_name', $page_name);
$smarty->assign('short_page_name', $short_page_name);

$id_match = $_GET['id_match'];
$_SESSION['id_match'] = $id_match;

global $database;
$date = $database->get('matchs', 'date', ['id_match' => $id_match]);
$id_equipe1 = $database->get('matchs', 'equipe1', ['id_match' => $id_match]);
$equipe1 = $database->get('equipes', 'nom_equipe', ['id_equipe' => $id_equipe1]);
$equipe2 = $database->get('matchs', 'equipe2', ['id_match' => $id_match]);
$score_equipe1 = $database->get('matchs', 'score_equipe1', ['id_match' => $id_match]);
$score_equipe2 = $database->get('matchs', 'score_equipe2', ['id_match' => $id_match]);

$smarty->assign('date', $date);
$smarty->assign('equipe1', $equipe1);
$smarty->assign('equipe2', $equipe2);
$smarty->assign('score_equipe1', $score_equipe1);
$smarty->assign('score_equipe2', $score_equipe2);
?>