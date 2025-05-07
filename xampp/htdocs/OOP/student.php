<?php


class Student {

    public $name;
    public $leeftijd;
    public $klas;
    public $studentnummer;

    function werkt() {
        echo "Student werkt";
    }

    function heeftPauze() {
        echo "Student heeft pauze";
    }

    function heeftLes() {
        echo "Student heeft nu les";
 }
}

$student1 = new Student();

$student1 ->name = "Jan";
$student1 ->leeftijd = 20;
$student1 ->klas = "3A";
$student1 ->studentnummer = 123;

$student2 = new Student();

$student2 ->name = "Piet";
$student2 ->leeftijd = 21;
$student2 ->klas = "3B";
$student2 ->studentnummer = 456;



$student1->heeftLes();
$student2->heeftPauze();

?>