<?php

$notas = [
    'Vinicius' => null,
    'Maria' => 9,
    'Ana' => 10,
    'Roberto' => 7,
    'João' => 8
];

/* arsort($notas); //ordena com os arrays na ordem inversa */
/* rsort($notas); // ordena ordem inversa */
ksort($notas); // ordena ordem alfabetica 
var_dump($notas);

if(is_array($notas)){
    echo 'Sim, é um array' . PHP_EOL;
}

/* var_dump(array_key_exists('Vinicius', $notas)); //verifica se a chave existe, retorna true */

echo 'Ana fez a prova:' . PHP_EOL;
var_dump(isset($notas['Ana'])); //verifica se o valor é nulo, retorna false se sim

echo 'Alguem tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas, true)); // verifica se existe algum valor

echo 'Quem tirou 10?' . PHP_EOL;
var_dump(array_search(10, $notas, true)); //busca a chave do valor 