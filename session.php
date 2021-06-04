<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="./css/w14.css"> -->
    <link rel="stylesheet" href="./css/session.css">
    <link rel="stylesheet" href="./css/nav.css">
    <script src="./js/password.js" defer></script>
    <title>Connexion</title>
</head>

<body>
<?php include('./templates/header.php') ?>
<main>
<h2>Se Connecter</h2>
<div id="global">
    <div>
        <form action="./controllers/logIn.php" id="connexion" method="POST">

            <div class="row_admin">
                <div class="admin_div">
                    <label for="login_username" class="control_label">Adresse email ou nom d'utilisateur</label>
                    <input class="barre" id="barre_id" type="text" name="identifiant" placeholder="Adresse email ou nom d'utilisateur" required />
                </div>
            </div>
            
            <div class="row_pass">
                <label for="login_password" class="control_label">Mot de passe</label>
                <div class="pass_div">
                    <input class="barre" type="password" name="password" id="eye_pass" placeholder="Mot de passe" required />
                    <div class="pic_eyes">
                        <img src="./images/oeil.png" alt="" id="pic_eye" height="45px" width="45px">
                    </div>
                </div>

            </div>

            <div class="row_submit">

                <div class="checkbox">
                    <label class="binding">
                        <input type="checkbox" class="input_rem" name="remember" value="0">Se souvenir de moi
                    </label>
                </div>

                <div>
                    <button class="binding">Se connecter</button>
                </div>
            </div>

            <div class="sign_up">

                <div class="separator_line"></div>

                <div class="text_row">
                    <h2>Vous n'avez pas de compte ?</h2>
                </div>

                <div class="no_account">
                    <a href="./form.php" class="button_regis binding" id="inscrit">M'inscrire</a>
                </div>
            </div>

        </form>
        <?php if (isset($_GET['error'])) : ?>
            <div class="wrong_pass">
                <p style='color:red'>Utilisateur ou password incorrect</p>
            </div><?php endif ?>
    </div>
</div>
</main>
</body>
<?php include('./templates/footer.php') ?>

</html>