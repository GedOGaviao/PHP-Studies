<?php

require_once 'funcoes.php';

// tipos de includes : require, require_once, include 

$contasCorrentes = [
    '123.456.789-90' => [
        'titular' => 'Casino',
        'saldo' => 10000
    ],
    '123.457.789-90' => [
        'titular' => 'Carla',
        'saldo' => 100000
    ],
    '123.456.789-45' => [
        'titular' => 'Jorge',
        'saldo' => 200
    ]
];

$contasCorrentes['123.456.789-90'] = sacar(
    $contasCorrentes['123.456.789-90'],
    100
);
$contasCorrentes['123.457.789-90'] = sacar(
    $contasCorrentes['123.457.789-90'],
    500
);
$contasCorrentes['123.456.789-45'] = depositar(
    $contasCorrentes['123.456.789-45'],
    800
);

unset($contasCorrentes['123.457.789-90']);

titularNomeMaisculo($contasCorrentes['123.456.789-45']);




/* foreach ($contasCorrentes as $cpf => $conta) {
['titular' => $titular, 'saldo' => $saldo] = $conta; // forma de se usar uma função list
exibeConta(
$conta
);
} */

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
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3>
                    <?= $conta['titular']; ?> -
                    <?= $cpf; ?>
                </h3>
            </dt>
            <dd> Saldo
                <?= $conta['saldo']; ?>
            </dd>
        <?php } ?>
    </dl>
</body>

</html>