<?php
    class Student{
        private $s_name, $s_roll;

        public function getData($name, $roll)
        {
            $this->s_name = $name;
            $this->s_roll = $roll;
        }

        public function showData()
        {
            echo "Name: " .$this->s_name. " & Roll: ".$this->s_roll;
        }
    }

    $stu1 = new Student();
    $stu1->getData("Shohel", 1314);
    $stu1->showData();

    echo "<br>";

    $stu2 = new Student();
    $stu2->getData("Raihan", 1319);
    $stu2->showData();

    echo "<br>";
    echo "<br>";

    class Car{
        private $c_name, $c_color, $c_price; //This is variable or property 

        public function getData($name, $color, $price) //This is function or method
        {
            $this->c_name = $name;
            $this->c_color = $color;
            $this->c_price = $price;
        }

        public function showData() //This is function or method
        {
            echo "Name: " .$this->c_name. " & Color: " .$this->c_color. " & Price: " .$this->c_price;
        }
    }
    
    // object part start 
    $car1 = new Car(); //This is object
    $car1->getData("Audi", "Black", 2000000);
    $car1->showData();
    
    echo "<br>";
    
    $car2 = new Car(); //This is object
    $car2->getData("Toyota", "Gray", 250000);
    $car2->showData();

    echo "<br>";

    $car3 = new Car(); //This is object
    $car3->getData("BMW", "White", 1500000);
    $car3->showData();
?>