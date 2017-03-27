<?php

/*
 Possible values:
 1 <=> 1 == 0
 2 <=> 1 == 1
 1 <=> 2 == -1
*/


$names = ['Jevgenijs', 'Aleksandrs', 'Ivans', 'Gundars'];

// Sort the name array
usort($names, function($a, $b) {
    if ($a < $b) {
        return -1;
    } else if ($a > $b) {
        return 1;
    }

    return 0;

    return $a <=> $b;
});

var_dump($names);