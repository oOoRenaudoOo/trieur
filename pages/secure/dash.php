
<?php

if ($_SESSION["logged"] == "TRUE") {

    $formNews->title = "Les Actus";
    $formNews->actionText = "news.php";
    $formNews->submitText = "Ajouter";
    
    $info = "Entrer un titre et une description";

    ?>
        <!-- debut Dash -->
   
        <section class="dash">
            <p>Bienvenue <?php echo $_SESSION["email"]; ?></p>
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

    header("location:/trieur/index.php.errLog=5");

}


?>
