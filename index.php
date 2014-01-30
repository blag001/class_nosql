<?php
//////////////////////////////////
// chargement et initialisation //
//////////////////////////////////

// on load la class de gestion NoSql
require_once ('toolNosql/Nosql.class.php');

// on lance la session qui contiendra la connexion
session_start();

// on cree l'objet de connexion NoSql dans $_SESSION['nosql']
require_once 'inc/connexion.inc.php';

//////////////////////////
// Fin d'initialisation //
//////////////////////////
// mettre votre code ici

