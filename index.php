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

if(isset($_POST['fetch'])){

    $jsonData = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Leusden&appid=8363c7ae7b5a1a90c53bb76eda802728");

    if($jsonData == null){
        die("<br>Probleem met API, probeer het later opnieuw !");
    }

    $dataArray = json_decode($jsonData,true);


    $lon        = $dataArray['coord']['lon'];
    $lat        = $dataArray['coord']['lat'];
    $weather    = json_encode(array("main" => $dataArray['weather'][0]['main'], "description" =>  $dataArray['weather'][0]['description']));
    $temp       = json_encode($dataArray['main']);
    $wind       = json_encode($dataArray['wind']);
    $clouds     = $dataArray['clouds']['all'];
    $visibility = $dataArray['visibility'];
    $name       = $dataArray['name'];
    $country    = $dataArray['sys']['country'];
    $sunrise    = $dataArray['sys']['sunrise']; 
    $sunset     = $dataArray['sys']['sunset']; 
    
    $sql = "INSERT INTO records (
                            lon,
                            lat,
                            weather,
                            temp,
                            wind,
                            clouds,
                            visibility,
                            name,
                            country,
                            sunrise,
                            sunset

                        ) VALUES (

                            '".$lon."',
                            '".$lat."',
                            '".$weather."',
                            '".$temp."',
                            '".$wind."',
                            '".$clouds."',
                            '".$visibility."',
                            '".$name."',
                            '".$country."',
                            '".$sunrise."',
                            '".$sunset."'

                        )";
        
        if(mysqli_query($con,$sql)){
            echo "<br> Data is succesvol bijgewerkt";
        }
        else{
                // Controleren op dublicatie
                if(mysqli_errno($con) == 1062){

                    $updateSql = "UPDATE records SET
                                lon = '".$lon."',
                                lat = '".$lat."',
                                weather = '".$weather."' ,
                                temp = '".$temp."',
                                wind = '".$wind."',
                                clouds = '".$clouds."',
                                visibility = '".$visibility."',
                                name = '".$name."',
                                country = '".$country."',
                                sunrise = '".$sunrise."',
                                sunset = '".$sunset."'

                                WHERE lon = '".$lon."' AND lat = '".$lat."' AND name = '".$name."'  
                                    ";

                    if(mysqli_query($con,$updateSql)){

                        echo "<br>Data Is Bijgewerkt";
                    }                
                    else{
                        echo "<br/>Bijwerken is niet gelukt: " . mysqli_error($con);
                    }

                }
                else{

                    echo "<br/>Data invoegen is niet gelukt: " . mysqli_error($con);
                }
            }
        
}

?>