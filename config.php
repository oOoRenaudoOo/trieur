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





// converti une Date
// anglais AAAA-MM-JJ HH:MM:SS -> francais JJ/MM/AA HH:MM:SS

function convertirDate($dateDelabase) {

    $date = substr($dateDelabase,0,10);
    $heure = substr($dateDelabase,11,8); 
    $an = substr($date,0,4);
    $mois = substr($date,5,2);
    $jour= substr($date,8,2);
    $dateFra = $jour. "/". $mois. "/". $an. " ". $heure;

    return($dateFra);

}




?>