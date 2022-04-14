<?php 

include "config.php";


if (!empty($_POST["actu"]) AND !empty($_POST["title"])) {

    $mysqli->query("INSERT INTO `news` (`id`, `iduser`, `title`, `actu`, `dateins`) VALUES (NULL, '".$_SESSION["idUser"]."', '".$_POST["title"]."', '".$_POST["actu"]."', CURRENT_TIMESTAMP)");

    header("location:/trieur/index.php?msgNews=1");

} else {

    // manque le titre ou l'actu
    header("location:/trieur/index.php?errNews=1");    

}



?>