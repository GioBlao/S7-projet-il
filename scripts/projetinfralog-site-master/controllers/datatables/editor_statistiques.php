<?php
/*
 * Example PHP implementation used for the index.html example
 */

session_start();
date_default_timezone_set('Europe/Paris');

// DataTables PHP library
require("../../vendor/datatables.net/editor-php/DataTables.php");

// Alias Editor classes so they are easy to use
use DataTables\Editor,
    DataTables\Editor\Field;

    $id_match = isset($_SESSION['id_match']) ? $_SESSION['id_match'] : null;

    Editor::inst($db, 'statistiques', 'statistiques.id_statistique')
        ->fields(
            Field::inst('joueurs.nom_joueur') // Champ du nom du joueur
                ->get(true)
                ->set(false),
            Field::inst('statistiques.id_statistique')
                ->get(true)
                ->set(false),
            Field::inst('statistiques.id_match')
                ->get(true)
                ->set(false),
            Field::inst('statistiques.id_joueur')
                ->get(true)
                ->set(false),
            Field::inst('statistiques.lf_reussi')
                ->get(true)
                ->set(false),
            Field::inst('statistiques.lf_rate')
                ->get(true)
                ->set(false),
            Field::inst('statistiques.2pts_reussi')
                ->get(true)
                ->set(false),
            Field::inst('statistiques.2pts_rate')
                ->get(true)
                ->set(false),
            Field::inst('statistiques.3pts_reussi')
                ->get(true)
                ->set(false),
            Field::inst('statistiques.3pts_rate')
                ->get(true)
                ->set(false),
            Field::inst('statistiques.passe_decisive')
                ->get(true)
                ->set(false),
            Field::inst('statistiques.rebond_off')
                ->get(true)
                ->set(false),
            Field::inst('statistiques.rebond_def')
                ->get(true)
                ->set(false),
            Field::inst('statistiques.interception')
                ->get(true)
                ->set(false),
            Field::inst('statistiques.contre')
                ->get(true)
                ->set(false),
            Field::inst('statistiques.perte_balle')
                ->get(true)
                ->set(false),
            Field::inst('statistiques.fautes')
                ->get(true)
                ->set(false),
        )
        ->leftJoin('joueurs', 'joueurs.id_joueur = statistiques.id_joueur')
        ->where('statistiques.id_match', $id_match)
        ->debug(true)
        ->process($_POST)
        ->json();
