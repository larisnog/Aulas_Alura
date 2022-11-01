<?php

$notas = [
    'Vinicius' => 6,
    'Maria' => 9,
    'Ana' => 10,
    'Roberto' => 7,
    'João' => 8
];

/* arsort($notas); //ordena com os arrays na ordem inversa */
/* rsort($notas); // ordena ordem inversa */
ksort($notas); // ordena ordem alfabetica 
var_dump($notas);