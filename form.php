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
        <h3>Inscrivez-vous gratuitement !</h3>

        <form action="formSend.php" id="inscription" method="POST">

            <div class="email">
                <label for="email">Quelle est votre adresse e-mail ?</label><br>
                <input type="email" name="user_email" width: 173px; placeholder="Saisissez votre adresse e-mail." required />
            </div>
            <div class="confirm">
                <label for="confirm">Confirmez votre adresse e-mail</label><br>
                <input type="email" name="confirm" placeholder="Saisissez de nouveau votre adresse e-mail." required />
            </div>
            <div class="creMdp">
                <label for="password">Créez un mot de passe</label><br>
                <input type="password" name="password" id="" placeholder="Créez un mot de passe.">
            </div>
            <div class="displayName">
                <label for="">Quel nom d'affichage souhaitez-vous définir ?</label><br>
                <input type="text" name="displayName" id="" placeholder="Saisissez un nom de profil." required>
            </div>
            <div class="birthday">
                <label for="birthday">Quelle est votre date de naissance ?</label> <br>
                <input type="age" name="birthday" placeholder="date de naissance">
            </div>
            <fieldset role="radiogroup">
                <legend class="genre">Quel est votre sexe ?</legend>
                <div class="inLinegroup">
                    <div id="genreMale">
                        <label for="option_genre_male">Masculin</label>
                        <input type="radio" name="gender" required value="male">
                    </div>
                    <div id="genreFemale">
                        <label for="option_genre_female">Féminin</label>
                        <input type="radio" name="gender" required value="female">
                    </div>
                    <div id="genreNeutral">
                        <label for="option_genre_neutral">Non-binaire</label>
                        <input type="radio" name="gender" required value="neutral">
                    </div>
                </div>
            </fieldset>

            <div class="signUpButton">
                <button type="submit" name="submit">
                    <div class="button">S'inscrire</div>
                </button>
            </div>




            <input type="submit" name="submit" value="Envoyer" />
        </form>

    </main>
</body>
<?php include './templates/footer.php' ?>

</html>