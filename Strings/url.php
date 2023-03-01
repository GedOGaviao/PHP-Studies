<?php

$url = 'http://alura.com.br';

$ehUrlSegura = str_starts_with($url, 'https');

if ($ehUrlSegura) {
    echo "$url é uma url segura" .PHP_EOL;
}else {
    echo "$url Não é uma url Segura" . PHP_EOL;
}

$dominioDoBrasil = str_ends_with($url, '.br');

if ($dominioDoBrasil) {
    echo "$url é um dominio do brasil" .PHP_EOL;
}else {
    "$url não é um dominio do brasil" . PHP_EOL;
}