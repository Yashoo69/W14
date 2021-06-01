<?php

session_start();

include('./users.php');

foreach($users as $value) {
    
    if ($_POST['identifiant'] == $value['name'] && $_POST['password'] == $value['password']) {
        $_SESSION['identifiant'] = $value['name']; 
       
    } 
}

if  (isset($_SESSION['identifiant'])) {
    header('Location: ../index.php');
}

else {
    header('location: ../session.php');  
}

?>


