<?php

session_start();
session_unset();

header("location:/trieur/index.php?errLog=6");

?>