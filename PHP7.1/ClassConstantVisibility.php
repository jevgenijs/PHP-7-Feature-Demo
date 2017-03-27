<?php

//just a random class with several constants
class Visibility {
    public const PUBLIC_CONSTANT = 1;
    private const PRIVATE_CONSTANT = 2;
    protected const PROTECTED_CONSTANT = 3;

    public function add(int $a, int $b) {
        return $a + $b;
    }
}

//protected and private consts will through an error because you cant access them
var_dump(Visibility::PROTECTED_CONSTANT);