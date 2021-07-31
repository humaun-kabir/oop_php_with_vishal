<?php
    //$this-> represent current instance.
    class class1{
        

        function __destruct()
        {
            echo "end <br>";
        }

        function test(){
            echo "hello <br>";
        }

        function __construct()
        {
            echo "start <br>";
        }
    }
$obj1 = new class1();
$obj1->test();
?>