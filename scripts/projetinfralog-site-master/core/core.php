<?php

include('../config/config.php');

    //constantes de configuration
    $server = DB_SERVER;
    $username = DB_USERNAME;
    $password = DB_PASSWORD;
    $dbName = DB_NAME;

    //connexion à la bdd
    $mysqli = new mysqli(
        $server,
        $username,
        $password,
        $dbName
    );

    if ($mysqli->connect_errno) {
        exit("Problème de connexion à la BDD");
    }

/* Code BDD

CREATE TABLE Equipes (
    idEquipe INT PRIMARY KEY,
    NomEquipe VARCHAR(255) NOT NULL
);

CREATE TABLE Joueurs (
    idJoueur INT PRIMARY KEY,
    NomJoueur VARCHAR(255) NOT NULL,
    idEquipe INT,
    FOREIGN KEY (idEquipe) REFERENCES Equipes(idEquipe)
);

CREATE TABLE Matchs (
    idMatch INT PRIMARY KEY,
    Date DATE NOT NULL,
    Equipe1 INT,
    Equipe2 INT,
    ScoreEquipe1 INT,
    ScoreEquipe2 INT,
    FOREIGN KEY (Equipe1) REFERENCES Equipes(idEquipe)
);

CREATE TABLE Statistiques (
    idStatistique INT PRIMARY KEY,
    idMatch INT,
    idJoueur INT,
    lancerFrancTente INT,
    lancerFrancReussi INT,
    lancerFrancRate INT,
    deuxPointsTente INT,
    deuxPointsReussi INT,
    deuxPointsRate INT,
    troisPointsTente INT,
    troisPointsReussi INT,
    troisPointsRate INT,
    passeDecisive INT,
    rebondOff INT,
    rebondDef INT,
    interceptions INT,
    contre INT,
    pertesBalle INT,
    fautes INT,
    minutes TIME,
    plusMinus INT,
    noteEvaluation INT,
    FOREIGN KEY (idMatch) REFERENCES Matchs(idMatch),
    FOREIGN KEY (idJoueur) REFERENCES Joueurs(idJoueur)
);

*/

?>