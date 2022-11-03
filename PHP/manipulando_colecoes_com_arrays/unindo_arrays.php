<?php

$alunos2021 = [
    'Vinicius', 
    'Maria',
    'Ana',
    'Roberto',
    'João'
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane'
];

/* $alunos2021 = array_merge($alunos2021, $novosAlunos); //junta os arrays */
 $alunos2022 = $alunos2021 + $novosAlunos; //soma mas n sobrescreve 

array_push($alunos2022, 'Alice', 'Bob', 'Charlie'); // adiciona mais elementos
$alunos2022[] = 'Luiz';

array_unshift($alunos2022, 'Sthephane', 'Rafaela'); //adicona elementos nas primeiras posições

echo array_pop($alunos2022) . PHP_EOL; //remove ultimo elemento e retorna ele

var_dump($alunos2022);