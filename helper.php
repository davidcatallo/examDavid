<?php

/* function pour appeler ma base de donnée */

function dbConnect() {
    $host       = 'localhost';  // Hôte de la base de données
    $dbname     = 'immobilier_david';  // Nom de la bdd
    $port       = '3308';       // Ou 3308 selon la configuration
    $login      = 'root';       // Par défaut dans WAMP
    $password   = '';           // Par défaut dans WAMP (pour MAMP : 'root')
    try {
        $instanceBdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8;port='.$port, $login, $password);
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return $instanceBdd;
}