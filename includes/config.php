<?php

ob_start();

$timezone = date_default_timezone_set("Europe/Warsaw");

$datatabseConnection = mysqli_connect("localhost", "root", "", "mplayer");

if(mysqli_connect_errno()) {
     echo "failed to connect: " . mysqli_connect_errno();
}

?>