<?php 

include "config.php";


if (!empty($_POST["actu"]) AND !empty($_POST["title"])) {

    $_SESSION["news"]["title"] = $_POST["title"];
    $_SESSION["news"]["actu"] = $_POST["actu"];

    // verification avant ajout

    $rqNews = $mysqli->query("SELECT * FROM news WHERE title='".$_POST["title"]."' AND actu='".$_POST["actu"]."' LIMIT 1");

    if ($rqNews->num_rows > 0) {

        // l'actu existe
        $news = $rqNews->fetch_object();
        $_SESSION["news"]["dateIns"] = convertirDate($news->dateIns);
        header("location:/trieur/index.php?msgNews=2");

    } else {

        // ajout de l'actu
        $mysqli->query("INSERT INTO `news` (`id`, `iduser`, `title`, `actu`, `dateIns`) VALUES (NULL, '".$_SESSION["idUser"]."', '".$_POST["title"]."', '".$_POST["actu"]."', CURRENT_TIMESTAMP)");

        header("location:/trieur/index.php?msgNews=1");

    }

    
} else {

    // titre et description non saisis

    if (empty($_POST["actu"]) AND empty($_POST["title"])) {
    
        header("location:/trieur/index.php?errNews=3");

    }

    else {

        
        if (empty($_POST["title"])) {
            
            // titre non saisi
            $_SESSION["news"]["actu"] = $_POST["actu"];
            header("location:/trieur/index.php?errNews=1");

        }
        else {

            // description non saisi
            $_SESSION["news"]["title"] = $_POST["title"];
            header("location:/trieur/index.php?errNews=2");

        }
         
    } 

}



?>