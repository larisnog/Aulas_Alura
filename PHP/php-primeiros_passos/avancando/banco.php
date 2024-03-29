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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?php echo $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>