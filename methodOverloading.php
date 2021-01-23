<?php
    class Addition{
        public function add($num1, $num2)
        {
            echo $num1 + $num2;
        }
        
        public function add($num1, $num2, $num3)
        {
            echo $num1 + $num2 + $num3;
        }    
    }

    $obj = new Addition();
    $obj->add(5, 6, 4);
?>