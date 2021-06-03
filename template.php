<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./css/secret.css">
    <link rel="stylesheet" href="./css/nav.css">
    <!-- <link rel="stylesheet" href="./css/w14.css"> -->
    <title>Page protégée par mot de passe</title>
</head>

<body>
    <?php include('./templates/header.php') ?>
    <main>
        <div class="nasa">
            <p>Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur central de la NASA :</p>
            <form action="secret.php" method="post">
                <p>
                    <input type="password" name="password" />
                    <input type="submit" value="Valider" />
                </p>
            </form>
            <p>Cette page est réservée au personnel de la NASA. Si vous ne travaillez pas à la NASA, inutile d'insister vous ne trouverez jamais le mot de passe ! ;-)</p>
        </div>
    </main>
</body>
<?php include './templates/footer.php' ?>
</html>