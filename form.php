<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/w14.css">
    <link rel="stylesheet" href="./css/nav.css">
    <title>Formulaire</title>
</head>

<body>
<?php include('./templates/header.php') ?>
    <main>
        <h2>Formulaire d'inscription</h2>
        <div id="form">
            <form action="formSend.php" method="POST">

                Nom : <input type="text" name="nom" required /><br><br>
                Prénom: <input type="text" name="Prenom" required /><br><br>
                E-mail: <input type="email" name="user_email" width: 173px; required /><br><br>
                Password: <input type="password" name="password" required><br><br>
              

                <input type="submit" name="submit" value="Envoyer" />
            </form>
        </div>
    </main>
</body>
<?php include './templates/footer.php' ?>
</html>