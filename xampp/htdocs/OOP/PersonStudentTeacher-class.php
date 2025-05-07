<?php

class Person {

    public string $firstname;
    public string $lastname;
    protected string $addres;
    public string $phoneNr;

    public function __construct($firstname, $lastname, $addres, $phoneNr) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->addres = $addres;
        $this->phoneNr = $phoneNr;

    }


    public function printInfo() {
        echo "Firstname: " . $this->firstname . "<br>";
        echo "Lastname: " . $this->lastname . "<br>";
        echo "Addres: " . $this->addres . "<br>";
        echo "PhoneNumber: " . $this->phoneNr . "<br>";
    } 
}


class Student extends Person {

    public int $studentID;
    public int $age;
    public string $study;

    public function __construct($firstname, $lastname, $addres, $phoneNr, $studentID, $age, $study) {

        parent::__construct($firstname, $lastname, $addres, $phoneNr);

        $this->studentID = $studentID;
        $this->age = $age;
        $this->study = $study;
    }

    public function printInfo() {
        parent::printInfo();

        echo "StudentID: " . $this->studentID . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Study: " . $this->study . "<br>";
    } 
}



class Teacher extends Person {

    public int $teacherID;
    public float $salary;

    public function __construct($firstname, $lastname, $addres, $phoneNr, $teacherID, $salary) {

        parent::__construct($firstname, $lastname, $addres, $phoneNr);

        $this->teacherID = $teacherID;
        $this->salary = $salary;
    }

    public function printInfo() {
        parent::printInfo();

        echo "TeacherID: " . $this->teacherID . "<br>";
        echo "Salary: " . $this->salary . "<br>";
    } 

}


$student1 = new Student("John", "Doe", "sesamstraat 3", "07709797997", 22097373, 17, "Computer Science");
$teacher2 = new Teacher("Danny", "de Munk", "elmstreet 33", "0937012490", 5311, 25000.4);


$student1->printInfo();
$teacher2->printInfo();

?>