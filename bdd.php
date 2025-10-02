<?php

function connectBDD()
{

    return new PDO(
        'mysql:host=' . getenv('MYSQL_HOST') . ';dbname=' . getenv('MYSQL_DATABASE'),
        getenv('MYSQL_USER'),
        getenv('MYSQL_PASSWORD'),
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
