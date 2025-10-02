<?php

function connectBDD()
{
    include 'env.php';
    return new PDO(
        'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DATABASE,
        MYSQL_USER,
        MYSQL_PASSWORD,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
}

function getAllApp()
{
    try {
        $request = "SELECT id_app, name_app FROM `application` ORDER BY id_app ASC";
        $bdd = connectBDD()->prepare($request);
        $bdd->execute();
        $data = $bdd->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    } catch (Exception $e) {
        return ["Erreur : " . $e->getMessage()];
    }
}
