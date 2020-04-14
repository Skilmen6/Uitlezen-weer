<?php

$dbHost = "localhost";
$dbUser = "student4a8_509704";
$dbPass = "oD5cPz";
$dbName = "student4a8_509704";

$con = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$con) {
    die("Error Establishing Database Connection");
    exit();
}
