<?php
    trait Java{
        public function javaCoder(){
            echo "I Love Java. <br/>";
        }
    }

    trait Php{
        public function phpCoder(){
            echo "I Love PHP. <br/>";
        }
    }

    class CoderOne{
        use Java;
    }

    class CoderTwo{
        use Java,Php;
    }

    $obj1 = new CoderOne;
    $obj1->javaCoder();

    $obj2 = new CoderTwo;
    $obj2->javaCoder();
    $obj2->phpCoder();
?>