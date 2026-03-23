<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogowaniePHP</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <form method="post">
            <label for="im" id="imie"><b>Podaj imię</b></label>
        <input type="text" id="im" name="imie">
        <input type="submit" id="dane" value="Wyślij dane">
    </form>

    <?php
    
    if (isset($_POST['imie'])) {
    $imie = $_POST['imie'];
    
    if (empty($imie)) {
        echo "<h1>Nie dodałeś/aś żadnego imienia!<h1>";
    } else {
        echo "<h1>Witaj $imie!</h1>";
    }
}
?>
</body>
</html>
