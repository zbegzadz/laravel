<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="GET">
  Session: <input type="numfmt_create" name="Session Number"><br>
</form>

<?php
session_start($_GET["Session"]);

echo rand (1,100) . "<br>";

if (!isset($_SESSION)) {
    $_SESSION["random"] = rand(1,100);
};

echo $_SESSION["random"] . "<br>";


?>


</body>
</html>