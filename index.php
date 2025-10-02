<?php
//Récupération des données de la BDD
include 'bdd.php';
$records = getAllApp();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
            <?php if (isset($records[0]["id_app"])) : ?>
                <?php foreach ($records as $app) : ?>
                    <tr>
                        <td><?= $app["id_app"]; ?></td>
                        <td><?= $app["name_app"]; ?></td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </tbody>
    </table>
</body>

</html>