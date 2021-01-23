<?php
    class Student
    {
        private $s_name, $s_address, $s_roll;

        public function getData($name, $address, $roll)
        {
            $this->s_name = $name;
            $this->s_address = $address;
            $this->s_roll = $roll;
        }

        public function showData()
        {
            echo "Name: " .$this->s_name. "<br>Address: " .$this->s_address. "<br>Roll: " .$this->s_roll;
        }
    }

    $stu1 = new Student();
    $stu1->getData('Nasim', 'Gazipur', 1339);
    $stu1->showData();

    echo '<br> <br>';
    
    $stu2 = new Student();
    $stu2->getData('Raihan', 'Norsindhi', 1319);
    $stu2->showData();
?>