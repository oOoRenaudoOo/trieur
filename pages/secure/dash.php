

<a href="/logout.php">Deconnexion</a>

<?php
    $rqUser = $mysqli->query("SELECT * from  members where id=".$_SESSION["idUser"]);

     $user = $rqUser->fetch_object();
    echo $user->email;
?>

<!-- debut Dash -->
    
    <section class="dash">
        <?php
            $formNews->title = "ajouter une actu";
            $formNews->actionText = "news.php";
            $formNews->submitText = "Ajouter";
            echo $formConnexion->afficheForm();
            
        ?>
    
    </section>
    
    <!-- Fin Dash -->