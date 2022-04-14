<?php

$hostName = "localhost";
$userName = "root";
$passWord = "";
$dataBase = "users";

$dir_fs = $_SERVER['DOCUMENT_ROOT']."/";
$dir_ws="/";

$mysqli = @new mysqli($hostName, $userName, $passWord, $dataBase);



session_start();
if(isset($_SESSION["idUser"]) AND !empty($_SESSION["idUser"])) {

    $_SESSION["logged"]="TRUE";

} else {

    $_SESSION["logged"]="FALSE";

}


?>



