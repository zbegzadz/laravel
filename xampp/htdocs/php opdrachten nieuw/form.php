<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['Naam'] = $_POST['Naam'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['personen'] = $_POST['personen'];
    $_SESSION['datum'] = $_POST['datum'];
    $_SESSION['tijd'] = $_POST['tijd'];
    header("Location: form.php");
    exit();
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
        Naam: <input type="text" name="Naam" required><br><br>
        E-mailadres: <input type="email" name="email" required><br><br>
        Aantal personen: <input type="number" name="personen" min="1" max="6" required><br><br>
        Datum: <input type="date" name="datum" required><br><br>
        Tijd: <input type="time" name="tijd" required><br><br>
        <input type="submit" value="Verstuur">
    </form>

    <?php 
    if (isset($_SESSION['Naam'])) {
        echo "<h2>Overzicht van uw boeking:</h2>";
        echo "<p><strong>Naam:</strong> " . $_SESSION['Naam'] . "</p>";
        echo "<p><strong>E-mailadres:</strong> " . $_SESSION['email'] . "</p>";
        echo "<p><strong>Aantal personen:</strong> " . $_SESSION['personen'] . "</p>";
        echo "<p><strong>Datum:</strong> " . $_SESSION['datum'] . "</p>";
        echo "<p><strong>Tijd:</strong> " . $_SESSION['tijd'] . "</p>";
        echo '<form method="POST" action="confirm.php">
                <button type="submit" name="confirm">Bevestigen</button>
              </form>';
    }
    ?>
</body>
</html>
