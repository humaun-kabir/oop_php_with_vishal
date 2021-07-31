<?php
    //accessing property one class to another class.
    class class1{
        function __construct()
        {
            $this->num=1;
            //echo "construct1";
        }

        function fun1(){
            echo "Fun1";
        }
    }

    class class2 extends class1{
        function __construct()
        {
            
            echo "construct2";
            parent::__construct();
            $this->num = 2;
        }

        function fun1(){
            echo "Fun2";
        }
    }

    $obj = new class2();
    echo $obj->num;
    //$obj->fun1();
?>