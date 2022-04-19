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

            $messageNews = isset($_GET["msgNews"]) ? $_GET["msgNews"] : "";
            $errorNews = isset($_GET["errNews"]) ? $_GET["errNews"] : "";
        
            include("pages/secure/dash.php");
        
        } else {

            $errorLog = isset($_GET["errLog"]) ? $_GET["errLog"] : "";
            $errorSig = isset($_GET["errSig"]) ? $_GET["errSig"] : "";
            $messageSig = isset($_GET["msgSig"]) ? $_GET["msgSig"] : "";
            $page = isset($_GET["page"]) ? $_GET["page"] : "";
            $inscrit = isset($_GET["inscrit"]) ? $_GET["inscrit"] : "";

            $shortUrl = ($errorLog == "" AND $errorSig == "" AND $messageSig == "" AND $page == "") ? "TRUE" : "";

            if ($shortUrl == "TRUE") {
                
                // page par defaut
                include("pages/connexion.php");
            
            } else { // Affiche page selon param dans l'url
                
                if ($errorLog <> "") {

                    include("pages/connexion.php");
    
                }
    
                if ($errorSig <> "") {
    
                    include("pages/inscription.php");
    
                }
    
                if ($messageSig <> "") {
    
                    include("pages/inscription.php");
    
                }
    
                if ($page == "connexion") {
    
                    include("pages/connexion.php");
                }
               
                    
                if ($page == "inscription") {
                    include("pages/inscription.php");
                } 

            }
            

        }
        

    ?>

    
</body>
</html>