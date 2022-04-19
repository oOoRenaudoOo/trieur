    <!-- Debut incription -->
    <?php 
        $info = "Entrez un email et un mot de passe";
        $lien = "./index.php?page=connexion";


        switch ($errorSig) {

            case 1:
                $info = "Entrez l'adresse email"; 
                break;

            case 2:
                $info = "Entrez le mot de passe";
                break;

            case 3:
                $info ="Entrez un email et un mot de passe";
                break;
      
        }

        switch ($messageSig) {

            case 1:
                $info ="Vous etes deja inscrit(e)";
                $lien = "./index.php?inscrit=ok";
                $formInscription->dateIns = $_SESSION["dateIns"];
                break;

            case 2:
                $info ="Inscription reussie";
                $lien = "./index.php?inscrit=ok";
                break;

        }
    
    
    ?>
  

    <section class="inscription" id="inscription">
        <?php
            $formInscription->className = "formInscription"; 
            $formInscription->title = "inscription";
            $formInscription->actionText = "signup.php";
            $formInscription->submitText = "je m'inscrit";

            if (!empty($errorSig)) {

                if(!empty($_SESSION["email"])) {

                    $formInscription->emailValue = $_SESSION["email"];
                    $_SESSION["email"] = "";
                }
                
                if(!empty($_SESSION["password"])) {
    
                    $formInscription->passwordValue = $_SESSION["password"];
                    $_SESSION["password"] = "";
                }

            }
            else {

                $formInscription->emailValue = "";
                $formInscription->passwordValue = "";

            }

            if (!empty($messageSig)) {

                $formInscription->passwordValue = $_SESSION["password"];
                $formInscription->emailValue = $_SESSION["email"];

            }
       
            
            echo $formInscription->afficheForm();

            
        ?>
        <p class="suggestion">Vous etes deja inscrit(e) ?, <a href="<?php echo $lien; ?>"><span>Connectez-vous<span></a></p>

        <div class="information">
            <p class="info-txt"><?php echo $info ?></p>
        </div>

        <footer class="end-section">
            <h4>
               - <?php echo date("Y");?> -
            </h4>
        </footer>

    </section>

    <!-- Fin inscription -->