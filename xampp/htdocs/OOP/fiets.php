<?php

class Fiets {
    public $color;
    public $merk;

    function fietsen() {
        echo "De fiets zit te rijden";
    }

    function remmen() {
        echo "De fiets zit te remmen";
    }

}


$fiets1 = new Fiets();
$fiets1->color = "Rood";
$fiets1->merk = "Ryder";

$fiets1->fietsen();
$fiets1->remmen();

?>