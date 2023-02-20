<?php

$idade = 16;
$nuemroDePessoas = 1;

echo "Olá Mundo ^^" . PHP_EOL;
echo "Eu tenho \"$idade\" anos";

echo PHP_EOL . PHP_EOL;

echo "Você pode entrar se tiver 18 anos ou mais\n";
echo "caso tenha 16 anos so entra acompanhado" . PHP_EOL;


if ($idade >= 18) {
    echo "Você tem $idade anos. pode entrar ^^";
} else if ($idade >= 16 && $nuemroDePessoas > 1) {
    echo "neném vai ter que tomar suquinho de abacaxi pq é o unico\n";
    echo "que temos disponivel pra gente da sua idade";
} else {
    echo "Você não pode entrar" . PHP_EOL;
}
echo PHP_EOL;

echo "PRÓXIMO";