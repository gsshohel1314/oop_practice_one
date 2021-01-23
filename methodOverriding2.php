<?php 
    class Car{
        public function startCar()
        {
            echo "The car is started from parent class. <br>";
        }

        public function parentStartCar()
        {
            self::startCar();
        }
    }
    class SportsCar extends Car{
        public function startCar()
        {
            echo "The car is started from child class. <br>";
        }

        public function childStartCar()
        {
            parent::parentStartCar();
        }
    }

    $obj = new SportsCar();
    $obj->startCar();
    $obj->childStartCar();
?>