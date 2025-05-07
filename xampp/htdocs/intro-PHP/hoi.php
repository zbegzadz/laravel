<!DOCTYPE html>
<html>
<body>
  <?php
  $leeftijd = 23;
  $naam = "Zaki B.";
  $isStudent = false;
  $woonplaats = "Amsterdam";
  echo "Mijn naam is $naam.<br>";
  echo "Mijn leeftijs is $leeftijd.<br>";
  echo "Mijn woonplaats is $woonplaats.<br>";

  if ($isStudent) {
    echo "Ik ben een student.<br>";
  } else {
    echo "Ik ben geen student.<br>";
  }

  if ($leeftijd > 18) {
    echo "Ik mag auto rijden.<br>";
  } else {
    
    echo "Ik mag geen auto rijden.<br>";
  }

  ?>
</body>
</html