<?php

$idadeList = [12, 20, 30, 25, 13, 29, 24, 54, 87];

//$nomes = ["maria", "estevão", "ednaldo", "tacalepau e la carinnho marcus"];

$idadeList[] = 56; //adicionando um novo elemento no array

for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}