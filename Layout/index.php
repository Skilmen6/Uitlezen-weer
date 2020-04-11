<?php
    $servername = "localhost";
    $username = "school";
    $password = "school";
    $database = "weather_db";
?>

<?php
//create connection;
$mysqli = new mysqli($servername, $username, $password,$database);

//check connection
if ($mysqli->connect_error) {
    exit("Connection failed: " . $mysqli->connect_error);
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli->set_charset("utf8mb4");

//variablen
$rows = null;

//sql query
$sql = "SELECT * FROM `records`";
$result = $mysqli->query($sql);

//loop door alle rijen en weergeef ze als table
while($row = $result->fetch_assoc()) {
    $rows .= "<tr>";
    $rows .= sprintf("<td>%s</td>",$row['lon']);
    $rows .= sprintf("<td>%s</td>",$row['lat']);
    $rows .= sprintf("<td>%s</td>",$row['weather']);
    $rows .= sprintf("<td>%s</td>",$row['feelslike']);
    $rows .= sprintf("<td>%s</td>",$row['temp']);
    $rows .= sprintf("<td>%s</td>",$row['humidity']);
    $rows .= sprintf("<td>%s</td>",$row['wind']);
    $rows .= sprintf("<td>%s</td>",$row['clouds']);
    $rows .= sprintf("<td>%s</td>",$row['visibility']);
    $rows .= sprintf("<td>%s</td>",$row['sunrise']);
    $rows .= sprintf("<td>%s</td>",$row['sunset']);
    $rows .= sprintf("<td>%s</td>",$row['created']);
    $rows .= "</tr>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Uitlezen van het weer</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <table>
        <tr>
            <th>lon ofzo?</th>
            <th>lat ofzo</th>
            <th>weer</th>
            <th>Voelt alsof??? xd</th>
            <th>Temperatuur</th>
            <th>Vochtigheid</th>
            <th>Wind</th>
            <th>Wolken</th>
            <th>Zichtbaarheid</th>
            <th>Zonsopgang</th>
            <th>Zonsondergang</th>
            <th>Datum aangemaakt</th>
        </tr>
        <?=$rows?>
    </table>
</body>
</html>