<?php

$equipe = $_GET['nom_equipe'];
$id_equipe = $_GET['id_equipe'];

$_SESSION['id_equipe'] = $id_equipe;

$page_name = "Projet Infra Logiciel";
$short_page_name = "Equipe " . $equipe;

$smarty->assign('page_name', $page_name);
$smarty->assign('short_page_name', $short_page_name);
$smarty->assign('equipe', $equipe);
