<?php
    class Person
    {
        private $name, $department;

        public function getInfo($name, $dept){
            $this->name = $name;
            $this->department = $dept;
        }

        public function showInfo(){
            echo "Name: ".$this->name. " & Department: ".$this->department. "<br>";
        }

        public function readBook(){
            echo "Teacher & Student both are read book <br>";
        }
    }

    class Teacher extends Person
    {
        private $salary;

        public function getSalary($sal){
            $this->salary = $sal;
        }

        public function showSalary(){
            echo "Salary: ".$this->salary. "<br>";
        }

        public function takeTheTest(){
            echo "Teacher set the exam paper <br>";
        }
    }

    class Student extends Person
    {
        private $roll;

        public function getRoll($roll){
            $this->roll =$roll;
        }

        public function showRoll(){
            echo "Roll: ".$this->roll. "<br>";
        }

        public function giveTheTest(){
            echo "Student solve the exam paper <br>";
        }
    }

    echo "Teacher Information: <br>";
    $teacher1 = new Teacher();
    $teacher1->getSalary(20000);
    $teacher1->showSalary();
    $teacher1->takeTheTest();
    $teacher1->getInfo('Fahad Zaman', 'SWE');
    $teacher1->showInfo();
    $teacher1->readBook();

    echo "<br>";

    echo "Student Information: <br>";
    $student = new Student();
    $student->getRoll(1314);
    $student->showRoll();
    $student->giveTheTest();
    $student->getInfo('Shohel', 'SWE');
    $student->showInfo();
    $student->readBook();
?>