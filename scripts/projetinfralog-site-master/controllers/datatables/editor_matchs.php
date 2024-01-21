<?php
/*
 * Example PHP implementation used for the index.html example
 */

session_start();
date_default_timezone_set('Europe/Paris');

// DataTables PHP library
require("../../vendor/datatables.net/editor-php/DataTables.php");

// Alias Editor classes so they are easy to use
use
    DataTables\Editor,
    DataTables\Editor\Field;

    $id_equipe = isset($_SESSION['id_equipe']) ? $_SESSION['id_equipe'] : null;

    Editor::inst($db, 'matchs', 'matchs.id_match')
        ->fields(
            Field::inst('matchs.id_match')
                ->get(true)
                ->set(false),
            Field::inst('matchs.date')
                ->get(true)
                ->set(false),
            Field::inst('matchs.equipe1')
                ->get(true)
                ->set(false),
            Field::inst('matchs.equipe2')
                ->get(true)
                ->set(false),
            Field::inst('matchs.score_equipe1')
                ->get(true)
                ->set(false),
            Field::inst('matchs.score_equipe2')
                ->get(true)
                ->set(false)
        )
        ->leftJoin('equipes','equipes.id_equipe = matchs.equipe1')
        ->where('matchs.equipe1', $id_equipe)
        ->debug(true)
        ->process($_POST)
        ->json();
