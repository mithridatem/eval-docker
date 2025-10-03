<?php
//import de la bdd
require_once './bdd.php';
//récupération des données
$records = getAllApp();
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Home</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nom</th>
            </tr>
        </thead>
        <tbody>
            <!-- Affichage des données -->
            <?php foreach ($records as $app) : ?>
                <tr scope="row">
                    <td scope="col"><?= $app["id_app"]; ?></td>
                    <td scope="col"><?= $app["name_app"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>