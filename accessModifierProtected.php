<?php
    class Food
    {
        protected $f_name;

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
        private $jfname = "Sandwich";
        public function useParentPrivateMember()
        {
            $this->f_name = $this->jfname;
        }
    }

    $f1 = new Food();
    $f1->getData("Pizza");
    $f1->showData();

    $f2 = new JunkFood();
    $f2->useParentPrivateMember();
    $f2->showData();
?>