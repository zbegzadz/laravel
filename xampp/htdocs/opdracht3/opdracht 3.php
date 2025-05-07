<?php



$tijd = date("H");

if ($tijd < 12) {
    echo "Goedemorgen het is: $tijd uur <br>";
} elseif ($tijd >= 12 && $tijd < 18) {
    echo "Goedenmiddag het is : $tijd uur <br>";
} else {
    echo "Goedenavond het is: $tijd uur <br>";
}



$getal1 = 10;
$getal2 = 20;

$gemiddelde = berekenGemiddelde($getal1, $getal2);

function berekenGemiddelde($getal1, $getal2) {
   echo ($getal1 + $getal2) / 2;
}



function berekenTotaleLengte($stringsArray) {
    $totaleLengte = 0;
    foreach ($stringsArray as $string) {
        $totaleLengte += strlen($string);
    }
    return $totaleLengte;
}

$strings = ["Hallo", "wereld", "PHP", "is", "geweldig!"];
echo berekenTotaleLengte($strings);








function naarHoofdletters($string) {
    return strtoupper($string);
}

$inputString = "welkom bij PHP";
echo naarHoofdletters($inputString);
?>