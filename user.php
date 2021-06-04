<?php

$users = [
    [
        'name' => 'Marco',
        'color' => 'bleu',
        'age' => 42
    ],
    [
        'name' => 'Paulo',
        'color' => 'Rouge',
        'age' => 21
    ],
    [
        'name' => 'Ginette',
        'color' => 'rose',
        'age' => 93
    ],
    [
        'name' => 'Thomas',
        'color' => 'vert',
        'age' => 30
    ],
    [
        'name' => 'Georges',
        'color' => 'gris',
        'age' => 54
    ]
];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/w14.css">
    <link rel="stylesheet" href="./css/nav.css">
    <title>Users</title>
</head>

<body>
    <?php include('./templates/header.php') ?>
    <main>
        <table>
            <tr>
                <th>Nom</th>
                <th>Couleur</th>
                <th>Age</th>
            </tr>

            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['color'] ?></td>
                    <td><?= $user['age'] ?></td>
                </tr>
            <?php endforeach ?>

        </table>
    </main>
</body>
<?php include('./templates/footer.php') ?>
</html>