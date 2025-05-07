<?php


//Opdracht 4.1
for ($i= 0 ; $i <= 50 ; $i++) { 
    echo $i;
}

echo "<br>";
echo "<br>";

//Opdracht 4.2
$nameKlasgenoten = ["Dilan", "Precious", "Tufan", "Arda", "Amo", "Ismael", "Mass", "Reza", "Mohammed", "Barbara <br>"];


foreach ($nameKlasgenoten as $klasgenoten) {
    echo $klasgenoten . "<br>";
}

//opdracht 4.3
$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 

$maanden = ['januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus', 'september', 'oktober', 'november', 'december'];
for ($i = 0; $i < count($maanden); $i++) {
    echo "Maand " . ($i + 1) . " is " . $maanden[$i] . ".<br>";
}
echo "<br>";

//echo 'Maand 1 is '.$maanden[0].'.<br />';
//echo 'Maand 2 is '.$maanden[1].'.<br />';
//echo 'Maand 3 is '.$maanden[2].'.<br />';
//echo 'Maand 4 is '.$maanden[3].'.<br />';
//echo 'Maand 5 is '.$maanden[4].'.<br />';
//echo 'Maand 6 is '.$maanden[5].'.<br />';
//echo 'Maand 7 is '.$maanden[6].'.<br />';
//echo 'Maand 8 is '.$maanden[7].'.<br />';
//echo 'Maand 9 is '.$maanden[8].'.<br />';
//echo 'Maand 10 is '.$maanden[9].'.<br />';
//echo 'Maand 11 is '.$maanden[10].'.<br />';
//echo 'Maand 12 is '.$maanden[11].'.<br />';


//opdracht 4.4
foreach ($maanden as $index => $maand) {
    echo "Maand " . ($index + 1) . " is " . $maand . "<br>";
}

echo "<br>";

//opdracht 4.5
for ($i=2; $i <= 20 ; $i+=2) { 
    echo $i . "<br>";
}

echo "<br>";

//opdracht 4.6
$dagen = ['Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag', 'Zaterdag', 'Zondag'];


for ($i = 0; $i < count($dagen); $i++) {
    echo "dag " . ($i + 1) . " van de week is: " . $dagen[$i] . "<br>";
}
?>

