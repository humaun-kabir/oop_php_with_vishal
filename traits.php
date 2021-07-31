<?php
    // trait class use specific class to inheritate.
    // inheritate multiple level execute code problem solve by trait.
    // using trait in another class Use then class name.
    // if same name using two traits, then can take preference t1::fun1 insteadof t1;
    trait t1{
        function fun1(){
            echo "t1:fun1";
        }
    }

    trait t2{
        function fun2(){
            echo "t2:fun2";
        }
    }

    class class1{
        use t1,t2;

        // t1::fun1 insteadof t2;
        // if sanme name function then it calls class name function first. 
        function fun2(){
            echo "class1:fun2";
        }
    }

    $obj = new class1();
    $obj->fun2();

?>