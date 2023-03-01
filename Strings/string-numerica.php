<?php

$anoDeNascimento = '1998'; // string numerica 

$idade = 2023 - $anoDeNascimento;

if($anoDeNascimento == 1998){
    echo 'SIM' . PHP_EOL; 
}else{
    echo 'NÃO' . PHP_EOL;
}

echo $idade;