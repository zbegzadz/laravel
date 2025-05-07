<?php



class Teacher {

    public string $name;
    public string $subject;
    public int $experience;
    public string $email;


    function getDetails() {
        echo "Name: $this->name <br>";
        echo "Subject: $this->subject <br>";
        echo "Experience: $this->experience <br>";
        echo "Email: $this->email <br>";
            }

    function addExperience($years) {
        $this->experience += $years;    
        return $this->experience;
    }
    function sendEmail($message){
        echo "Sending email... <br> ";
        echo $message;
    }

    

    public function __construct($name, $subject, $experience, $email) {
        
        $this->name = $name;
        $this->subject = $subject;
        $this->experience = $experience;
        $this->email = $email;

    }

}


$teacher1 = new Teacher("John Doe", "Math", 5, "john.doe@yahoo.com");
$teacher2 = new Teacher("Danny de Munk", "English", 3, "danny.demunk@google.com");
$teacher3 = new Teacher("Andre Hazes", "PE", 23, "andre.hazes@outlook.com");

$teacher1->addExperience(7);
$teacher3->getDetails();
$teacher2->sendEmail("Hello, this is a email");

?>