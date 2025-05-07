<?php

class BankRekening {

    private float $saldo = 0;
    

    public function stort($bedrag) {

        if ($bedrag > 0) {

            $this->saldo += $bedrag;

        } else {
            echo "Ongeldig getal" . "<br>";
        }

    }
    

    public function opnemen($bedrag) {
        
        if ($bedrag <= $this->saldo) { // Fixed the condition here
            $this->saldo -= $bedrag;
        } else {
            echo "Bedrag is groter dan je saldo of ONGELDIG bedrag" . "<br>";
        }
        
    }


    public function bekijkSaldo() {
        echo "Saldo: " . $this->saldo . "<br>";
    }

}


$poep = new BankRekening;

$poep->stort(110);
$poep->bekijkSaldo();
$poep->opnemen(79);
$poep->bekijkSaldo();

?>