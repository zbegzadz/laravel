<?php



//Deel 1

$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];

    $myArray[]="tram";

echo $myArray[0]."<br>";
echo $myArray[1]."<br>";
echo $myArray[2]."<br>";
echo $myArray[3]."<br>";
echo $myArray[4]."<br>";
echo $myArray[5]."<br>";

echo "<br>";








 //Deel 2

 $myArray = ['auto','fiets','brommer','bus','vliegtuig','trein',"tram"];

echo "Het array heeft ".count($myArray)." elementen<br>";








//Deel 3

$places = [
    "Japan" => "Tokyo<br>",
    "Mexico" => "Mexico City<br>",
    "USA" => "New York City<br>",
    "India" => "Mumbai<br>",
    "Korea" => "Seoul<br>",
    "China" => "Shanghai<br>",
    "Nigeria" => "Lagos<br>",
    "Argentina" => "Buenos Aires<br>",
    "Egypt" => "Cairo<br>",
    "UK" => "London<br>"];

    foreach ($places as $country => $capital) {
        echo $country . $capital;
    }










// Deel 4A



$cijfers = [3.5, 7.2, 1, 8.8, 5, 2.3, 9.6, 4, 6.1, 0.9];

$som = 0;

for ($i = 0; $i < count($cijfers); $i++) {
    $som = $som + $cijfers[$i];
}

$aantal = count($cijfers); // Tel hoeveel cijfers er zijn.
$gemiddelde = $som / $aantal; // Bereken het gemiddelde.
$gemiddelde = round($gemiddelde, 1);

        echo "Het gemiddelde is: $gemiddelde";
?>