<?php

$notas = [
    10,
    8,
    9,
    7
];

$notasOrdenadas = $notas;
sort($notasOrdenadas); // ordena notas crescente

echo 'Desordenadas:';
var_dump($notas);

echo 'Ordenadas:'; 
var_dump($notasOrdenadas);