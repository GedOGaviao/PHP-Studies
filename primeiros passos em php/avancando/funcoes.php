<?php

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Saldo insuficiente!");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        echo exibeMensagem("Deposito Invalido, valor inserido deve ser positivo");
    }


    return $conta;
}

function titularNomeMaisculo(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
} //passagem de valor por referencia

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
   echo "<li>Titular: $conta[titular]. Saldo: {$conta['saldo']}</li>";
}

function exibeMensagem(string $mensagem): void
{
    echo $mensagem . PHP_EOL . '<br>';
}