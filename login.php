<?php 


include "config.php";

$_SESSION["email"] = "";
$_SESSION["password"] = "";

// recherche utilisateur a partir des identifiants

if (!empty($_POST["email"]) AND !empty($_POST["password"])) {

      $rqUser = $mysqli->query("SELECT * FROM members WHERE email='".$_POST["email"]."' AND password='".$_POST["password"]."' LIMIT 1");


      if ($rqUser->num_rows > 0){
      
            $user = $rqUser->fetch_object();
      
            // ouverture session utilisateur
            $_SESSION["idUser"] = $user->id;
            $_SESSION["email"] = $user->email;
            $_SESSION["inscrit"] = "TRUE";
            $_SESSION["logged"] = "TRUE";
            $_SESSION["dateIns"] = $user->dateIns;
            
            header("location:/trieur/index.php");
    
      } else {

            // l'utilisateur n'existe pas
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["password"] = $_POST["password"];
            header("location:/trieur/index.php?errLog=4");
    
      }

} else {

      if (empty($_POST["email"]) AND empty($_POST["password"])) {

            // identifiants non saisis
            header("location:/trieur/index.php?errLog=3");
      
      } else {

            if (empty($_POST["password"])) {

                  // password non saisis
                  $_SESSION["email"] = $_POST["email"];
                  header("location:/trieur/index.php?errLog=2");

            }
            else {

                   // email non saisis
                  $_SESSION["password"] = $_POST["password"];
                  header("location:/trieur/index.php?errLog=1");

            }

      }


}


?>