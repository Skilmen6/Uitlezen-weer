<?php
// URL van de API

$prefix = 'http://api.openweathermap.org/data/2.5/weather?q=';
// De stad waar je het weer van wilt hebben
$city = 'Leusden';
// De appid die je nodig hebt om de API te gebruiken.
// Deze appid is aangemaakt voor dit project
$key = '0e4ef55b89fabe9486772b8be8060fd5';
// Het aanmaken van de URL
$url = $prefix . $city . '&appid=' . $key;
// Het ophalen van de data
$weather = file_get_contents($url);
// Het laten zien van de data
var_dump($weather);
