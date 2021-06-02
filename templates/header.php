<?php session_start() 

?>

<header>
    <nav>
        <ul class="navbar">
            <li class="ltmenu"> <a href="index.php"> Accueil </a></li>
            <li class="ltmenu"> <a href="user.php"> Utilisateurs </a></li>
        
            <?php if (isset($_SESSION['identifiant'])) :
                $maj = $_SESSION['identifiant'];
                $maj = ucfirst($maj); ?>
                <div class="dropdown">
                    <button onclick="drop()" class="dropbtn">Hi,<?= $maj ?></button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="./controllers/logOut.php">Log Out</a>
                    </div>
                </div>
            <?php else : ?>
                <li class="ltmenu"> <a href="form.php"> Inscription </a></li>
                <li class="ltmenu"> <a href="session.php"> Connexion </a></li>
            <?php endif ?>

        </ul>
    </nav>

    <script>
        
        /* Quand l'utilisateur clique sur le bouton, 
        va jongler entre cacher ou montrer le menu déroulant */

        function drop() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Ferme le menu déroulant si l'utilisateur clique ailleurs sur la page.

        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {

                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>

</header>