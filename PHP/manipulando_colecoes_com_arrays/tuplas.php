<?php

/* $dados = ['Vinicius', 10, 24]; */
$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24
];
 
/* [$nome, $nota, $idade] = $dados; */ 
 
extract($dados); //pega array e cria variáveis
var_dump($nome, $nota, $idade);

compact('nome', 'nota', 'idade'); // pega variáveis e cria array