<?php
    class Person{
        static $name;
        private $age, $email;

        public function getData($p_age, $p_email){
            $this->age = $p_age;
            $this->email = $p_email;
        }

        public function showData(){
            echo "Age is: ".$this->age."<br/>";
            echo "Email is: ".$this->email."<br/>";
        }
    }

    Person::$name = "Shohel";
    echo "Name is: ".Person::$name. "<br/>";

    $per = new Person();
    $per->getData(25, "shohel@gmail.com");
    $per->showData();
?>