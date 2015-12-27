<?php
    class calculator{
    	public $a;
        public $b;
        public $c;
        public $d;
        public $y;
        public $z;

        function plus($a, $b, $c, $d){
        	$y = $a + $b;
        	$z = $c + $d;
        	echo $z;
        }

        function minus($a, $b){
            $y = $a + $b;
            $z = $c + $d;
            echo $z;
        }

    }

    $obj = new calculator;
    $obj->plus(1, 2, 3, 4);
    $obj->minus(9, 8, 7, 6);
?>