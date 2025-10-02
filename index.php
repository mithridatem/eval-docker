<?php
require_once './bdd.php';
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
            <?php foreach ($records as $app) : ?>
                <tr>
                    <td><?= $app["id_app"]; ?></td>
                    <td><?= $app["name_app"]; ?></td>
                </tr>
            <?php endforeach; ?>
            <?php foreach ($records as $app) : ?>
                <tr>
                    <td><?= $app["id_app"]; ?></td>
                    <td><?= $app["name_app"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>