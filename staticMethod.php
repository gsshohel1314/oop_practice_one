<?php 
    class Person{
        public static $name = "Shohel Rana";

        public static function show(){
            echo "Name is: ".self::$name;
        }
    }

    echo "Name is: ".Person::$name. "<br/>";
    Person::show();
?>



