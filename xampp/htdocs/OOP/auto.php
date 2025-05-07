<?php

class Auto {

    public string $merk;
    public int $bouwJaar;
    public string $kleur;
    public int $topsnelheid;
    private string $eigenaar;

    public function __construct($merk, $bouwJaar, $kleur, $topsnelheid, $eigenaar) {
        $this->merk = $merk;
        $this->bouwJaar = $bouwJaar;
        $this->kleur = $kleur;
        $this->topsnelheid = $topsnelheid;
        $this->eigenaar = $eigenaar;
    }

    public function print_info() {
        echo "Merk: $this->merk <br>";
        echo "Bouwjaar: $this->bouwJaar <br>";
        echo "kleur: $this->kleur <br>";
        echo "topsnelheid: $this->topsnelheid <br>";
        echo "eigenaar: $this->eigenaar <br>";
    }

    public function rijden() {
        echo "Vrooom vrooeeemmm! <br>";
    }

}

$auto1 = new Auto("Ford", 2007, "Grijs", 120, "Danny de Munk");
$auto2 = new Auto("BMW", 2017, "Blauw", 200, "Andre Hazes");


$auto1->rijden();
$auto2->print_info();

?>