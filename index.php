<?php


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/w14.css">
    <link rel="stylesheet" href="./css/nav.css">
    <title>MENU</title>
</head>

<body>
    <?php include('./templates/header.php') ?>

    <main>
        <?php


        if (isset($_SESSION['identifiant'])) :
            $id = ($_SESSION['identifiant']);
            $id = strtoupper($id); ?>
            <img src="./images/welcome.png" height="200px" width="400px" alt="Bienvenue"><h1><?= $id ?></h1>
        <?php else : ?>
            <img src="./images/welcome.png" height="300px" width="500px" alt="Bienvenue">
        <?php endif ?>

    </main>
</body>
<?php include('./templates/footer.php') ?>
</html>