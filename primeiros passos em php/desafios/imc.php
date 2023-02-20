<?php

$peso = 82;
$altura = 1.75;

$imc = $peso / ($altura ** 2);

if($imc >= 18.5 &&  $imc <=24.9){
    echo "você esta com peso ideal\n";
    echo $imc;
}else if($imc > 24.9){
    echo "você esta acima do peso\n";
    echo $imc;
}else {
    echo "voce esta abaixo do peso\n";
    echo $imc;
}