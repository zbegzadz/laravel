<?php

function berekenOppervlaktie($lengte,$breedte) {
$oppervlakte = $lengte * $breedte;
return $oppervlakte;
}

echo "De oppervlakte is " . berekenOppervlaktie(5,20)."<br>";
echo "De oppervlakte is " . berekenOppervlaktie(6,28)."<br>";


?>