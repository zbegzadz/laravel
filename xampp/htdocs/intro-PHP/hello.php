<!DOCTYPE html>
<html>
<body>
  <?php

$leeftijd = 12;


if ($leeftijd < 12 || $leeftijd > 65) {
    $boodschap = "Je mag gratis naar binnen.";
} else if ($leeftijd > 12 && $leeftijd < 17) {
     $boodschap = "Je mag korting op de ticketprijs.";
} else {
    $boodschap = "Je moet de volle prijs betalen.";
}

echo($boodschap);




?>
</body>
</html\\