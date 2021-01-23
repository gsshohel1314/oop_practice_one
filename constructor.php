<?php
    class Example{ 
        private $name;

        public function __construct($value)
        {
            $this->name = $value;
        }

        public function showData()
        {
            echo $this->name;
        }
    }

    $obj = new Example('Hello World');
    $obj->showData();
?>

