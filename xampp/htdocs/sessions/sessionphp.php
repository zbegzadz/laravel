<?php 
session_start();

// checken of er een sessie is anders maken
if(!isset($_SESSION["getal"])) {
     
    $_SESSION["getal"] = rand(1, 100); 
} 

// wat er word geechoed  
$msg = ""; 
if($_SERVER["REQUEST_METHOD"] == "POST") { 
    $guess = $_POST["gok"]; 
    
    // checken of binnen bereik is
 if($guess < 1 || $guess > 100) { 
     $msg = "Nee!! Moet tussen 1 en 100 zijn!!!!"; 
    } else { 
        // is ie correct?
        if($guess < $_SESSION["getal"]) { 
            $msg = "te laag!! Hoger proberen"; 
    } else if($guess > $_SESSION["getal"]) { 
            $msg = "te hoog.. lager proberen"; 
       } else { 
         $msg = "GEFELICITEERD! Je goed geraden!!!"; 

         //oud getal weghalen
            unset($_SESSION["getal"]);
            //nieuw getal genereren
          $_SESSION["getal"] = rand(1, 100); 
}
} 
} 

?>

<!DOCTYPE html>
<html>
<head>
    <title>Raad Spel!</title>
</head>
<body>
    <h1>Raad een GETAL!!!</h1>
    <p><?php echo $msg; ?></p>
    <form method="post">
        <label>Gok:</label>
        <input type="number" name="gok">
        <button>DOEN!</button>
    </form>
</body>
</html>
