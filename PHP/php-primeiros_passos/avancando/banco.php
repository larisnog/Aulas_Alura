<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10'  => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-12' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 500);
$contasCorrentes['123.456.789-12'] = sacar($contasCorrentes['123.456.789-12'], 200);
$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], 500);
 
unset($contasCorrentes['123.456.789-12']);

titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

foreach($contasCorrentes as $cpf => $conta){
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem("$cpf $titular $saldo");
}