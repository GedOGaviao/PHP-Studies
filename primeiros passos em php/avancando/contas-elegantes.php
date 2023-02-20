<?php


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
        'titular' => 'João',
        'saldo' => 900
    ]
];

$contasCorrentes['156.546.785-85'] = [
        'titular' => 'Carlão',
        'saldo' => 5000
    ];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}