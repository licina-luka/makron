<?php

class Producer {

    /** */
    protected $a = 1, $b = 2, $c = 3;

    /** */
    function getProduct() : int {
        return $->a * $->b * $->c;
    }
}

print (new Producer)->getProduct();