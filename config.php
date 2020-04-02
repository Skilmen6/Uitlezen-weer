<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "weather_db";

$con = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

if(!$con){
    die("Error Establishing Database Connection");
    exit();
}
?>