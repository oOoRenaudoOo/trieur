    <!-- debut section connexion -->
    <?php

        $info = "Entrez vos identifiants";
        $lien = "./index.php?page=inscription";  

        switch($errorLog) {
            
            case 1:
                $info = "Entrez l'adresse email";
                break;

            case 2:
                $info = "Entrez le mot de passe";
                break;

            case 3:
                $info = "Entrez vos identifiants";
                break;

            case 4:
                $info = "Identifiants incorrects / inscrivez vous";
                break;

            case 5:
                $info = "Vous n'etes pas connecte(e)";
                break;

            case 6:
                $info = "Vous êtes deconnecte(e)";
                break;

            }


    ?>

    <section class="connexion" id="connexion">
        <?php
            $formConnexion->className = "formConnexion";
            $formConnexion->title = "connexion";
            $formConnexion->actionText = "login.php";
            $formConnexion->submitText = "je me connecte !";

           
            if (!empty($errorLog)) {

                if(!empty($_SESSION["email"])) {

                    $formConnexion->emailValue = $_SESSION["email"];
                    $_SESSION["email"] = "";
                }
                
                if(!empty($_SESSION["password"])) {
    
                    $formConnexion->passwordValue = $_SESSION["password"];
                    $_SESSION["password"] = "";
                }

            }
            else {

                $formConnexion->emailValue = "";
                $formConnexion->passwordValue = "";

            }
            
            if ($inscrit == "ok") {

                $formConnexion->emailValue = $_SESSION["email"];
                $formConnexion->passwordValue = $_SESSION["password"];

            }

            echo $formConnexion->afficheForm();
            
        ?>
        <p class="suggestion">Creer un compte, <a href="<?php echo $lien; ?>"><span>Inscrivez-vous<span></a></p>

        <div class="information">
            <p class="info-txt"> <?php echo $info; ?></p>
        </div>

        <footer class="end-section">
            <h4>
               - <?php echo date("Y");?> -
            </h4>
        </footer>

    </section>

    <!-- fin section connexion  -->