<?php
    include ("config.php");
    include ("common/form.class.php");
    include ("common/formNews.class.php");

    $formNews = new FormNewshtml();
    $formConnexion = new Formhtml();
    $formInscription = new Formhtml();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Conception</title>

    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
    
    <header>
        <h1>Virtual dash</h1>
    </header>


    <?php 
    
        if($_SESSION["logged"] == "TRUE") {
        
            include("pages/secure/dash.php");
        
        } else {

            $errorLog = isset($_GET["errLog"]) ? $_GET["errLog"] : "";
            $errorSig = isset($_GET["errSig"]) ? $_GET["errSig"] : "";
            $message = isset($_GET["msg"]) ? $_GET["msg"] : "";

            if ($errorLog <> "") {

                include("pages/connexion.php");

            }

            if ($errorSig <> "") {

                include("pages/inscription.php");

            }

            if ($message <> "") {

                include("pages/inscription.php");

            }

            if ($errorLog == "" AND $errorSig == "" AND $message == "") {

                include("pages/connexion.php"); 
                include("pages/inscription.php");

            }


        }
        

    ?>

    
</body>
</html>