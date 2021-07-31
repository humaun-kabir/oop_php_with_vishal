<?php
// abstruct means incomplete when abstruct declare then there is abstruct method means incomplete method.
// abstract class contain atleast 1 abstract function.
// abstract function must declare but not implement.
// abstract class could not create object.
// abstract class, child class must contain abstract function. 
// link : https://www.youtube.com/watch?v=MLYyP5ZaGv4&list=PLWCLxMult9xe9juvg6ADG6UPz74GWuDny&index=4

abstract class bank{
    abstract function id_proff();
}

class hdfc extends bank{
    function test(){
        echo "test";
    }
    //if don't have abstruct method inside child class then showing error.
}

class icci extends bank{
    function test(){
        echo "test";
    }

    //if don't have abstruct method inside child class then showing error.
}


?>
