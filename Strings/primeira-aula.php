<?php

$nome = 'Gustavo Henrique Da Silva Albuquerque';

$ehDaMinhaFamilia = str_contains($nome, 'Guedes');

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha familia" . PHP_EOL;
} else {
    echo "$nome não é da minha famalia" . PHP_EOL;
}