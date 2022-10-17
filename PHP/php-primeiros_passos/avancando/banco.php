<?php

function sacar(array $conta, float $valorASacar): array
{
    if($valorASacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorADepositar): array
{
    if($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;

    }else {
        exibeMensagem("Depósitos precisam ser positivos");
    }
    return $conta;
}

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
$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], -300);
 
foreach($contasCorrentes as $cpf => $conta){
    exibeMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}