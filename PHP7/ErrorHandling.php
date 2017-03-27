<?php

/*
 * Can catch following errors:
 *
 * Error
 * TypeError
 * ParseError
 * ArithmeticError
 * AssertionError
 * DivisionByZeroError
*/

$foo = null;

function sum(int $a, int $b) {
    return $a + $b;
}

try {
    $foo->method();
    sum('one', 1);
}

// Throwable catches both exception and error
// Exceptions in PHP 5 don't implement a throwable so it will skip
catch (Throwable $e) {
    echo 'Caught a throwable';
}

catch (ParseError $e) {
    echo 'exception caught - parse error';
}

catch (TypeError $e) {
     echo 'error was caught';
}

//catch any generic error
catch (Error $e) {
    echo 'error caught - generic error';
}

