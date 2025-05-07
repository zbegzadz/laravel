<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['gebruikersnaam'] = $_POST['gebruikersnaam'];
    header('Location: welkom.php');
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="POST">

  <input type="text" name="name" placeholder="Naam" required> <br>

  <input type="date" name="dob" placeholder="Date of Birth" required> <br>

  <input type="email" name="email" placeholder="Email" required> <br>

  <input type="submit" name="knop" value="Verstuur">

</form>

</body>
</html>