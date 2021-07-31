<?php
    //no need to create object.
    // using classname::functionname you can execute.
    // no need to using $this-> you can use self::variablename.
    // link : https://www.youtube.com/watch?v=s-NUj8x5mfI&list=PLWCLxMult9xe9juvg6ADG6UPz74GWuDny&index=6
    // when we don't want to call constructor then use static.

    class class1{
        static public $num1=10;
        public $num2=20;
        static function fun1(){
            echo self::$num1;
        }
    }
    echo class1::fun1();
?>