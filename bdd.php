<?php

/**
 * Méthode de connexion à la base de données
 * @return PDO
 */
function connectBDD()
{
    return new PDO(
        'mysql:host=' . getenv('MYSQL_HOST') . ';dbname=' . getenv('MYSQL_DATABASE'),
        getenv('MYSQL_USER'),
        getenv('MYSQL_PASSWORD'),
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
}

/**
 * Méthode de récupération de toutes les applications
 * @return array
 */
function getAllApp()
{
    try {
        $request = "SELECT a.id_app, a.name_app FROM `application` AS a ORDER BY id_app ASC";
        $bdd = connectBDD()->prepare($request);
        $bdd->execute();
        $data = $bdd->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    } catch (Exception $e) {
        return ["Erreur : " . $e->getMessage()];
    }
}
