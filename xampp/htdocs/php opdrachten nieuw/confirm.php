<?php

session_start();


if (isset($_POST['confirm'])) {
    $boekingsID = time() . rand(1000, 9999);

    // Toon de bevestigingspagina
    echo "<h1>Bedankt voor uw boeking!</h1>";
    echo "<p>Uw boeking is bevestigd.</p>";
    echo $boekingsID ;


    session_destroy();
    echo "<p>U kunt een nieuwe boeking maken via <a href='form.php'>het formulier</a>.</p>";
} else {
    echo "Ongeldige toegang.";
}
?>
