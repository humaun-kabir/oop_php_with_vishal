<?php
    //interface support multiple inheritance.
    //interface can only contain abstract function, can't define normal method.
    //in interface we cann't define variables.
    //no constructor in interface.
    //all function must be public.

    //link : https://www.youtube.com/watch?v=X6Qq_-ix9Ug&list=PLWCLxMult9xe9juvg6ADG6UPz74GWuDny&index=5

    interface class1{
        public function test1();
    }

    interface class2{
        public function test2();
    }
    class class3 implements class1,class2{
        public function test1(){

        }
        public function test2(){

        }
    }

    $obj = new class3();
    echo $obj->test1();

?>