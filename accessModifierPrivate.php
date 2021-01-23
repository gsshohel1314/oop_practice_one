<?php
    class Food
    {
        private $f_name;

        public function getData($name)
        {
            $this->f_name = $name;
        }

        public function showData()
        {
            echo "Food name is: ".$this->f_name. "<br>";
        }
    }

    class JunkFood extends Food
    {
        private $jf_name;

        public function passParentPrivateMember($jname)
        {
            $this-> getData($this->jf_name = $jname);
        }
    }

    $f1 = new Food();
    $f1->getData("Pizza");
    $f1->showData();

    $f2 = new JunkFood();
    $f2->passParentPrivateMember("Sandwich");
    $f2->showData();
?>