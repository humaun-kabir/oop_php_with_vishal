<?php
    //same operation may be behave differently in different class.

    //Abstract class
    //interface

    abstract class class1{
        abstract function fun1();
    }

    class class2 extends class1{
        function fun1(){
            echo "Fun1";
        }
    }

    class class3 extends class1{
        function fun1(){
            echo "Fun2";
        }
    }

    $obj = new class3();
    $obj->fun1();
?>