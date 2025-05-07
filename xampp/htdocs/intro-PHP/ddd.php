<?php

$places = [
    "Japan" => "Tokyo<br>",
    "Mexico" => "Mexico City",
    "USA" => "New York City",
    "India" => "Mumbai",
    "Korea" => "Seoul",
    "China" => "Shanghai",
    "Nigeria" => "Lagos",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London"];

    foreach ($places as $country => $capital) {
        echo $country . $capital;
    }

?>