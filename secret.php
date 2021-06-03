<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./css/secret.css">
    <link rel="stylesheet" href="./css/nav.css">
    <!-- <link rel="stylesheet" href="./css/w14.css"> -->

    <title>Codes d'accès au serveur central de la NASA</title>
</head>

<body>
    <?php include('./templates/header.php') ?>
    <main>
        <?php

        if (isset($_POST['password']) and $_POST['password'] ==  "tartiflette") // Si le mot de passe est bon
        {
            // On affiche les codes
        ?>
            <div class="code">
                <h1>Voici les codes d'accès :</h1>
                <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>

                <p style="text-align: center">
                    Cette page est réservée au personnel de la NASA. N'oubliez pas de la visiter régulièrement car les codes d'accès sont changés toutes les semaines.<br />
                    La NASA vous remercie de votre visite.
                </p>
            </div>
        <?php
        } else // Sinon, on affiche un message d'erreur
        {
            echo '<p>Mot de passe incorrect</p>';
        }
        ?>

    </main>
</body>
<?php include './templates/footer.php' ?>
</html>