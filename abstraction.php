<?php
    abstract class Person{
        abstract public function showInfo();
        
        public function department()
        {
            echo "Software Engineering Department <br>";
        }
    }

    class Teacher extends Person{
        public function showInfo(){
            echo "showInfo method override in Teacher class <br><br>";
        }
    }

    $te = new Teacher();
    $te->department();
    $te->showInfo();

    class Student extends Person{
        public function showInfo(){
            echo "showInfo method override in Student class <br>";
        }
    }

    $st = new Student();
    $st->department();
    $st->showInfo();
?>