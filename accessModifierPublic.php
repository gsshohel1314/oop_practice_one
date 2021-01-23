<?php
    class Food
    {
        public $f_name;

        public function showData()
        {
            echo "Food name is: ".$this->f_name;
        }
    }

    $f1 = new Food();
    $f1->f_name = "Pizza";
    $f1->showData();
?>