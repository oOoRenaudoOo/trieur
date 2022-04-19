<?php 

include "config.php";

$_SESSION["email"] = "";
$_SESSION["password"] = "";


if (empty($_POST["email"]) AND empty($_POST["password"])) {

    // email et password non saisis
    header("location:/trieur/index.php?errSig=3");
}
else {

    if(empty($_POST["password"])) {

        $_SESSION["email"] = $_POST["email"];
        // mot de passe non saisis
        header("location:/trieur/index.php?errSig=2");

    }
    else {

        if(empty($_POST["email"])) {

            $_SESSION["password"] = $_POST["password"];
            // email non saisis
            header("location:/trieur/index.php?errSig=1");
    
        }
        else {

            // inscrit ?

            $rqUser = $mysqli->query("SELECT * FROM members WHERE email='".$_POST["email"]."' AND password='".$_POST["password"]."' LIMIT 1");

            $_SESSION["email"] = $_POST["email"];
            $_SESSION["password"] = $_POST["password"];
            
            if ($rqUser->num_rows > 0) {

                // deja inscrit
                $user = $rqUser->fetch_object();
                $_SESSION["dateIns"] = convertirDate($user->dateIns);
            
                header("location:/trieur/index.php?msgSig=1");
            
            }
            else {

                // inscription 
                $mysqli->query("INSERT INTO `members` (`id`, `email`, `password`, `dateIns`) VALUES (NULL, '".$_POST["email"]."', '".$_POST["password"]."', CURRENT_TIMESTAMP)");

                $_SESSION["dateIns"] = "";
                // $_SESSION["dateIns"] = date("d/m/y - H:i:s", time());

                header("location:/trieur/index.php?msgSig=2");

            }

        }

    }

}

// inscrit ?

// $rqUser = $mysqli->query("SELECT * FROM members WHERE email='".$_POST["email"]."' AND password='".$_POST["password"]."' LIMIT 1");

// if ($rqUser->num_rows > 0) {

//     header("location:http://trieur/index.php?msg=1");    
// }




// $mysqli->query("INSERT INTO `members` (`id`, `email`, `password`, `dateins`) VALUES (NULL, '".$_POST["email"]."', '".$_POST["pass"]."', CURRENT_TIMESTAMP)");

// $_SESSION["inscrit"] = "true";

// header("location:http://trieur/index.php");

?>