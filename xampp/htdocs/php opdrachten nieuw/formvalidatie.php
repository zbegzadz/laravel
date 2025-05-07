<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $naam = htmlspecialchars(trim($_POST["naam"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $telefoon = htmlspecialchars(trim($_POST["tel"]));
    $wachtwoord = htmlspecialchars(trim($_POST["pass"]));

    if (preg_match("/^[a-zA-Z ]{3,}$/", $naam)) {
        echo "Geldige naam.<br>";
    } else {
        echo "Naam is niet geldig.<br>";
    }

    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Geldig e-mailadres.<br>";
    } else {
        echo "E-mailadres is niet geldig.<br>";
    }

    
    if (empty($telefoon) || preg_match("/^[0-9]{10}$/", $telefoon)) {
        echo "Geldig telefoonnummer.<br>";
    } else {
        echo "Telefoonnummer is niet geldig.<br>";
    }

    
    if (preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$!%*?&])[A-Za-z\d@#$!%*?&]{8,}$/", $wachtwoord)) {
        echo "Sterk wachtwoord.<br>";
    } else {
        echo "Wachtwoord voldoet niet aan de eisen.<br>";
    }
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
    <h1>Inschrijf formulier:</h1>
    <br>
    <form action="" method="post">
        <input type="text" name = "naam" placeholder="Naam" required>
        <input type="email" name = "email" placeholder="E-Mail" required>
        <input type="tel" name = "tel" placeholder="Telefoon">
        <input type="password" name = "pass" placeholder="Wachtwoord" required>
        <input type="submit">

    </form>
</body>
</html>