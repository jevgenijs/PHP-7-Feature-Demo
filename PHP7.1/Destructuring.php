<?php

/* $names = ['jevgenijs', 'Aleksandrs', 'Janis'];
 [$a, $b, $c] = $names;

 //in PHP 5 would go from right to left and display jevgenijs instead of janis for $c
 var_dump($c);*/


$people = [
    [ 'firstName' => 'Jevgenijs', 'lastName' => 'V.'],
    [ 'firstName' => 'Aleksandrs', 'lastName' => 'N.'],
    [ 'firstName' => 'Janis', 'lastName' => 'K.']
];

foreach ($people as ['firstName' => $first, 'lastName' => $last]) {
    echo "$first $last, ";
}