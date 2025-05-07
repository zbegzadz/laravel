<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="GET">
  Naam: <input type="text" name="Naam"><br>
  Surname: <input type="text" name="Achternaam"><br>
  Adres: <input type="text" name="Adres"><br>
  E-mail: <input type="text" name="email"><br>
  Leeftijd: <input type="text" name="leeftijd"><br>
  <input type="submit" value="Verzenden">
</form>

<?php

if (!empty($_GET)) {
    echo "<h2>Ingevoerde Gegevens:</h2>";

   echo $naam = $_GET["Naam"] . "<br>";
   echo $Surname = $_GET["Achternaam"] . "<br>";
   echo $naam = $_GET["Adres"] . "<br>";
   echo $Surname = $_GET["email"] . "<br>";
   echo $Surname = $_GET["leeftijd"] . "<br>";

    }
?>

</body>
</html>

