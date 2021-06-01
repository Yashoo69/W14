<?php

/* Vérifier si le formulaire est soumis 
 if ( isset( $_GET['submit'] ) ) {
 récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
*/


$nom = $_POST['nom'];
$age = $_POST['Age'];
$adresse = $_POST['adresse'];
$prenom = $_POST['Prenom'];
$email = $_POST['user_email'];

?>

<!DOCTYPE html>
<html lang="en">

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
            <h1>Merci de ton retour <?php echo $prenom ?> !</h1>
            <img src="./images/formulaire.png" height="400px" width="400px" alt="au revoir">
            <div class="data">

                <?= '<p>Nom : ' . $nom . '</p>' .
                    '<p>Prenom : ' . $prenom . '</p>' .
                    '<p>Age : ' . $age . ' ans ' . '</p>' .
                    '<p>Email : ' . $email . '</p>' .
                    '<p>Adresse : ' . $adresse . '</p>';
                ?>

            </div>
        </div>
    </main>
</body>
<?php include('./templates/footer.php') ?>
</html>