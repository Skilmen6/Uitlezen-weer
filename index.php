<?php
// URL van de API
$prefix = 'http://api.openweathermap.org/data/2.5/weather?q=';
// De stad waar je het weer van wilt hebben
$city = 'Leusden';
// De appid die je nodig hebt om de API te gebruiken.
// Deze appid is aangemaakt voor dit project
$key = '0e4ef55b89fabe9486772b8be8060fd5';
$url = $prefix . $city . '&appid=' . $key;

$weather = file_get_contents($url);

var_dump($weather);
