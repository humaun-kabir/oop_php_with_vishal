<?php
    class class1{
        protected $num;
        function __construct()
        {
            $this->num = 1;
        }

        function getNum(){
            return $this->num;
        }
    }

    $obj = new class1();
    echo $obj->getNum();

?>