<?php

$conta1 = [
    'titular' => 'Paulo',
    'saldo' => 10000
];

$conta2 = [
    'titular' => 'Carla',
    'saldo' => 100000
];

$conta3 = [
    'titular' => 'João',

];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i=0; $i < count($contasCorrentes); $i++) { 
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}