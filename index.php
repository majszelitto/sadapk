<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <h1>Witaj na mojej stronie!</h1><br>
    <?php
    echo "<table border = '1'>";
    echo "<tr>";
    echo "<th><b>NAZWA</b></th>";
    echo "<th><b>DATA</b></th><br>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><a href='PlanDnia/plan.html'>Plan Dnia</a></td>";
    echo "<td>21.03.2026</td>";
    echo "<tr>";
    echo "<td><a href='Haslo/haslohtml.html'>Haslo</a></td>";
    echo "<td>21.03.2026</td>";
    echo "</tr>";
    echo "</table>";
    ?>
</body>
</html>