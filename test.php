<?php


class Number {
    public $a = 5;
    public function __construct($b) { $a = $b + 3; }
    }
    $num = new Number(3);
    echo $num->a;