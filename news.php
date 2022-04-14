<?php 

include "config.php";

$mysqli->query("INSERT INTO `news` (`id`, `iduser`, `actu`, `dateins`) VALUES (NULL, '".$_SESSION["idUser"]."', '".$_POST["actu"]."', CURRENT_TIMESTAMP)");

header("location:http://trieur");

?>