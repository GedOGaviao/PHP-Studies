<?php

$nome = 'Gustavo Henrique';
$email = 'Gustavo@alura.com';
$senha = '123';

if (strlen($senha) < 8) {
    echo 'Senha não é segura' .PHP_EOL;
}else {
    echo 'tudo ok por aqui filhão' . PHP_EOL;
}

$possicaoDoArroba = strpos($email,'@');

$usuario = substr($email, 0, $possicaoDoArroba);

list($nome, $sobrenome) = explode(' ', $nome); //o explode ira precisar de algo que indique a separação e a ira ordenador os itens separados em um array 

echo  mb_strtoupper($usuario) . PHP_EOL;
echo substr($email, $possicaoDoArroba + 1) .PHP_EOL;
echo "Nome: $nome" .PHP_EOL;
echo "Sobrenome: $sobrenome" . PHP_EOL;