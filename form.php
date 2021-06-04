<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="./css/nav.css">
    <title>Formulaire</title>
</head>

<body>
    <?php include('./templates/header.php') ?>
    <main>
        <h1>Inscrivez-vous gratuitement !</h1>

        <form action="formSend.php" id="inscription" method="POST">

            <div id="email" class="formDiv">
                <label for="email" class="lab">Quelle est votre adresse e-mail ?</label><br>
                <input type="email" name="user_email" class="inputForm" placeholder="Saisissez votre adresse e-mail." required />
            </div>
            <div id="confirm" class="formDiv">
                <label for="confirm" class="lab">Confirmez votre adresse e-mail</label><br>
                <input type="email" name="confirm" class="inputForm" placeholder="Saisissez de nouveau votre adresse e-mail." required />
            </div>
            <div id="creMdp" class="formDiv">
                <label for="password" class="lab">Créez un mot de passe</label><br>
                <input type="password" name="password" class="inputForm" placeholder="Créez un mot de passe.">
            </div>
            <div id="displayName" class="formDiv">
                <label for="" class="lab">Quel nom d'affichage souhaitez-vous définir ?</label><br>
                <input type="text" name="displayName" class="inputForm" placeholder="Saisissez un nom de profil." required>
            </div>
            <div id="birthday" class="formDiv">
                <label for="birthday" class="lab">Quelle est votre date de naissance ?</label> <br>
                <div class="dateParent">
                    <div class="day">
                        <div></div>
                    </div>
                    <div class="month"></div>
                    <div class="years"></div>
                </div>
                <input type="age" name="birthday" class="inputForm" max="100" placeholder="date de naissance">
            </div>
            <fieldset role="radiogroup" id="genre">
                <legend class="genre">Quel est votre sexe ?</legend>
                <div class="inLinegroup">
                    <div id="genreMale">
                        <label for="option_genre_male"> <span class="spaName">Masculin</span></label>
                        <input type="radio" class="gender" name="gender" required value="male">
                    </div>
                    <div id="genreFemale">
                        <label for="option_genre_female"> <span class="spaName">Féminin</span></label>
                        <input type="radio" class="gender" name="gender" required value="female">
                    </div>
                    <div id="genreNeutral">
                        <label for="option_genre_neutral"> <span class="spaName">Non-binaire</span> </label>
                        <input type="radio" class="gender" name="gender" required value="neutral">
                    </div>
                </div>
            </fieldset>

            <div id="emailForm">
                <div class="signUpButton">
                    <button type="submit" name="submit" class="buttunInside">
                        <div class="buttun">S'inscrire</div>
                    </button>
                </div>
                <p class="session">
                    <span>Vous avez déjà un compte ? <a href="./session.php" style="text-decoration: none;">Connectez-vous</a></span>
                </p>
            </div>
        </form>

    </main>
</body>
<?php include './templates/footer.php' ?>

</html>