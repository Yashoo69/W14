
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/w14.css">
    <link rel="stylesheet" href="./css/nav.css">
    <title>Connexion</title>
</head>

<body>
    <?php include('./templates/header.php') ?>
    <main>
        <h2>Connexion</h2>
        <div id="global">
            <div id="connexion">

                <form action="./controllers/logIn.php" method="POST">

                <label for=""> Identifiant: <input type="text" name="identifiant" placeholder="Identifiant" required /></label>

                <?php if(isset($_GET['error'])) : ?>
                        <p style='color:red'>Utilisateur ou password incorrect</p> <?php endif ?>

                <label for=""> Password: <input type="password" name="password" placeholder="Password" required /></label>

                <label for=""> Remember me: <input type="checkbox" name="remember" value="0"/></label>
                   
                       
                    <input type="submit" class="button" id="login-button" value="Envoyer" />
                </form>
            </div>
        </div>
    </main>
</body>
<?php include('./templates/footer.php') ?>

</html>