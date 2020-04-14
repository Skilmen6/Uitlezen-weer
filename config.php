<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "weather_db";

$mysqli = new mysqli($servername, $username, $password, $database);

if ($mysqli->connect_error) {
    exit("Connection failed: " . $mysqli->connect_error);
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli->set_charset("utf8mb4");
