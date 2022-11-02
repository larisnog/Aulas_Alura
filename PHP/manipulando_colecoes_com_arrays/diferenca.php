<?php

$notasBimestre1 = [
    'Vinicius' => 6,
    'Maria' => 9,
    'Ana' => 10,
    'Roberto' => 7,
    'João' => 8
];

$notasBimestre2 = [
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7,
];

/* var_dump(array_diff_key($notasBimestre1, $notasBimestre2)); //busca a chave diferente nas duas comparações */

/* var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2)); //busca as chaves e valores difentes */

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2); // mostra os alunos q faltaram
$nomesAlunos = array_keys($alunosFaltantes); //mostra  a chave dos alunos
$notasAlunos = array_values($alunosFaltantes); //mostra os valores

var_dump(array_combine($notasAlunos, $nomesAlunos)); // combina os valores e as chaves
var_dump(array_flip($alunosFaltantes)); //inverte chave e valor