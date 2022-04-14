<?php 


include "config.php";

$_SESSION["email"] = "";
$_SESSION["password"] = "";

// recherche utilisateur a partir des identifiants

if (!empty($_POST["email"]) AND !empty($_POST["password"])) {

      $rqUser = $mysqli->query("SELECT * FROM members WHERE email='".$_POST["email"]."' AND password='".$_POST["password"]."' LIMIT 1");


      if ($rqUser->num_rows > 0){
      
            // ouverture session
            $user = $rqUser->fetch_object();
            
            // echo $user->id;
            $_SESSION["idUser"] = $user->id;
            $_SESSION["inscrit"] = "TRUE";
            $_SESSION["logged"] = "TRUE";
            $_SESSION["dateIns"] = $user->dateIns;
            
            // var_dump($_SESSION);
            header("location:/trieur/index.php");
    
      } else {
            // identifiants incorrects
            // soit l'email ou le mot de passe ou les deux
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

                  $_SESSION["email"] = $_POST["email"];
                  // password non saisis
                  header("location:/trieur/index.php?errLog=2");

            }
            else {

                  $_SESSION["password"] = $_POST["password"];
                  // email non saisis
                  header("location:/trieur/index.php?errLog=1");

            }

      }


}


?>