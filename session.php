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
        <h2>SIGN IN</h2>
        <div id="global">
            <div >

                <form action="./controllers/logIn.php" id="connexion" method="POST">

                    <label for=""> Identifiant: <input class="barre" type="text" name="identifiant" placeholder="Identifiant" required /></label>


                    <label for=""> Password: <input class="barre" type="password" name="password" placeholder="Password" required /></label>

                    
                    <label for=""> Remember me <input type="checkbox" name="remember" value="0" /></label>
                    
                    
                    <input type="submit" class="button" id="login-button" value="Send" />
                </form>
                <?php if (isset($_GET['error'])) : ?> 
                   <div class="wrong_pass"><p style='color:red'>Utilisateur ou password incorrect</p></div><?php endif ?>
            </div>
        </div>
    </main>
</body>
<?php include('./templates/footer.php') ?>

</html>