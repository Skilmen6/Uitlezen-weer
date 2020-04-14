<?php
include("../config.php");

//variablen
$rows = null;
$rowsChart = null;

//sql query
$sql = "SELECT * FROM `uitlezen_weer_records`";
$result = $mysqli->query($sql);

//loop door alle rijen en weergeef ze als table
while ($row = $result->fetch_assoc()) {
    $rows .= "<tr>";
    $rows .= sprintf("<td>%s</td>", $row['weather']);
    $rows .= sprintf("<td>%s</td>", $row['feelslike']);
    $rows .= sprintf("<td>%s</td>", $row['temp']);
    $rows .= sprintf("<td>%s</td>", $row['humidity']);
    $rows .= sprintf("<td>%s</td>", $row['pressure']);
    $rows .= sprintf("<td>%s</td>", $row['min_temp']);
    $rows .= sprintf("<td>%s</td>", $row['max_temp']);
    $rows .= sprintf("<td>%s</td>", $row['wind_direction']);
    $rows .= sprintf("<td>%s</td>", $row['date']);
    $rows .= sprintf("<td>%s</td>", $row['time']);
    $rows .= "</tr>";

    //voeg data toe aan de tabel
    $rowsChart .= "['".$row{'time'}."',".$row{'temp'}.",".$row{'feelslike'}."],";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Uitlezen van het weer</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart(){
            var data = new google.visualization.DataTable();
            var data = google.visualization.arrayToDataTable([
                ['Tijd', 'Temperatuur', 'Gevoelstemperatuur'],
                <?=$rowsChart?>
            ]);

            var options = {
                title: 'De temperatuur van vandaag',
                legend: { position: 'bottom' },
                hAxis: {
                    title: 'Tijd'
                },
                vAxis: {
                    title: 'Temperatuur'
                },
                width: 900,
                height: 500,
            };

            var chart = new google.visualization.LineChart(document.getElementById('tempchart'));
            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <div id="container">
        <table>
        <tr>
            <th>Weer</th>
            <th>Gevoelstemperatuur</th>
            <th>Temperatuur</th>
            <th>Vochtigheid</th>
            <th>Luchtdruk</th>
            <th>Minimale Temperatuur</th>
            <th>Maximale Temperatuur</th>
            <th>Windrichting</th>
            <th>Datum aangemaakt</th>
            <th>Tijd aangemaakt</th>
        </tr>
        <?=$rows?>
        </table>
        <div id="tempchart"></div>
    </div>

</body>
</html>
