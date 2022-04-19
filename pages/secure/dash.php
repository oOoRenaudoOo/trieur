
<?php

if ($_SESSION["logged"] == "TRUE") {

    $formNews->title = "Les Actus";
    $formNews->actionText = "news.php";
    $formNews->submitText = "Ajouter";
    
    $info = "Entrer un titre et une description";

    if ($errorNews == 1) {

        $info = "Saisir le titre";
        $formNews->descValue = $_SESSION["news"]["actu"];
    
        $_SESSION["news"]["actu"] = "";

    }

    if ($errorNews == 2) {

        $info = "Saisir la description";
        $formNews->titleValue = $_SESSION["news"]["title"];
    
        $_SESSION["news"]["title"] = "";
    }

    if ($errorNews == 3) {

        $info = "Saisir le titre et la description";

    }

    if ($messageNews <> "") {

        $formNews->titleValue = $_SESSION["news"]["title"];
        $formNews->descValue = $_SESSION["news"]["actu"];
    
        $_SESSION["news"]["title"] = "";
        $_SESSION["news"]["actu"] = "";

        if ($messageNews == 1) {

            $info = "Ajout de l'actualite realise";

        } else {

            $info = "Cette actualite existe : ".($_SESSION["news"]["dateIns"]);

        }

    }

    ?>
        <!-- debut Dash -->

        <section class="dash">

            <div class="bienvenue">
                <div class="user">
                    <p>Bienvenue :</p>
                    <span><?php echo $_SESSION["email"]; ?></span>
                </div>
                <div class="date">
                    <p>depuis le :</p>
                    <span><?php echo $_SESSION["dateIns"]; ?></span>
                </div>
            </div>
            
            <?php

                echo $formNews->afficheForm();

            ?>

            <p class="suggestion">Deconnexion, <a href="././logout.php"><span>Logout<span></a></p>

            <div class="information">
                <p class="info-txt"><?php echo $info ?></p>
            </div>

            <footer class="end-section">
                <h4>- <?php echo date("Y");?> -</h4>
            </footer>

        </section>


        <!-- Fin Dash -->
    
    <?php

} else {
    header("location:../../index.php?errLog=5");

}


?>
