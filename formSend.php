<?php

/* Vérifier si le formulaire est soumis 
 if ( isset( $_GET['submit'] ) ) {
 récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
*/


$nom = $_POST['displayName'];
$email = $_POST['user_email'];


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/form.css">
    <title>Formulaire</title>
</head>

<body>
    <?php include('./templates/header.php') ?>
    <main>

        <div class="back">
            <h1>Tu es bien inscris <?php echo $nom ?> !</h1>
            <img src="./images/lotus.png" height="300px" width="400px" alt="au revoir">
            <div class="data">

                <?= '<p>Identifiant : ' . $nom . '</p>' .
                    '<p>Email : ' . $email . '</p>' 
                ?>

            </div>
        </div>
    </main>
</body>
<?php include('./templates/footer.php') ?>
</html>