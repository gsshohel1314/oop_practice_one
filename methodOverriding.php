<?php 
    class Car{
        public function startCar()
        {
            echo "The car is started.";
        }
    }
    class SportsCar extends Car{
        public function startCar()
        {
            echo "The sport car is started with self start.";
        }
    }

    $obj = new SportsCar();
    $obj->stardCar();
?>