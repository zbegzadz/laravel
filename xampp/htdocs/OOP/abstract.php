<?php

abstract class Voertuig {

    abstract public function beweeg();
    
    public function startMotor() {
        echo "Start motor." . "<br>";
    }



}

class Auto extends Voertuig implements Elektrisch {
    public function beweeg() {
        echo "De wielen van de auto gaan rond en rond" . "<br>";
    } 
    public function laadOp() {
        echo "De auto word opgeladen";
    }

    public function toonBatterijStatus() {
        echo "De auto heeft ....% aan accu";
    }
}

class Motor extends Voertuig {
    public function beweeg() {
        echo "De wielen van de motor gaan rond en rond" . "<br>";
    }
}

interface Elektrisch {
    public function laadOp();
    public function toonBatterijStatus();

}

?>