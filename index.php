<!DOCTYPE html>
<html>
    <head>
        <title>Weer binnenhalen</title>
    </head>

    <body>
        <form method="POST">
            <input type="submit" name="fetch" value="Haal Weer Op!">
        </form>
    </body>
</html>
<?php
error_reporting(false);

include("config.php");

if (isset($_POST['fetch'])) {
    $jsonData = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Leusden&appid=8363c7ae7b5a1a90c53bb76eda802728&units=metric&lang=nl");
    date_default_timezone_set("Europe/Amsterdam");
    $time = date("H:i:s");
    $date = date("Y-m-d");
    if ($jsonData == null) {
        die("<br>Probleem met API, probeer het later opnieuw !");
    }

    $dataArray = json_decode($jsonData, true);


    $lon        = $dataArray['coord']['lon'];
    $lat        = $dataArray['coord']['lat'];
    $weather    = $dataArray['weather']['0']['description'];
    $feelslike  = $dataArray['main']['feels_like'];
    $temp       = $dataArray['main']['temp'];
    $humidity   = $dataArray['main']['humidity'];
    $wind       = $dataArray['wind']['speed'];
    $clouds     = $dataArray['clouds']['all'];
    $visibility = $dataArray['visibility'];
    $name       = $dataArray['name'];
    $country    = $dataArray['sys']['country'];
    $sunrise    = $dataArray['sys']['sunrise'];
    $sunset     = $dataArray['sys']['sunset'];

    $sql = "INSERT INTO uitlezen_weer_records (
                            lon,
                            lat,
                            weather,
                            feelslike,
                            temp,
                            humidity,
                            wind,
                            clouds,
                            visibility,
                            name,
                            country,
                            sunrise,
                            sunset,
                            `date`,
                            `time`

                        ) VALUES (

                            '".$lon."',
                            '".$lat."',
                            '".$weather."',
                            '".$feelslike."',
                            '".$temp."',
                            '".$humidity."',
                            '".$wind."',
                            '".$clouds."',
                            '".$visibility."',
                            '".$name."',
                            '".$country."',
                            '".$sunrise."',
                            '".$sunset."',
                            '".$date."',
                            '".$time."'

                        )";

    if (mysqli_query($con, $sql)) {
        echo "<br> Data is succesvol bijgewerkt";
    } else {
        // Controleren op dublicatie
        echo "<br/>Data invoegen is niet gelukt: " . mysqli_error($con);
    }
}

?>
