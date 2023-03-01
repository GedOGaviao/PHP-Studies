<?php

$telefones = ['(24) 99999 - 9999', '(22) 99999 - 9999', '(24) 94444 - 4444', '(30) 5423 - 1111'];

foreach ($telefones as $telefone) {
    $regex = '/^\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}$/'; // exemplo de uma expressão regular complexa 
    $telefoneValido = preg_match(
        $regex,
        $telefone,
        $corespondencia
    );

    if ($telefoneValido) {
        echo "TELEFONE VALIDO" . PHP_EOL;
    } else {
        echo "TELEFONE INVALIDO" . PHP_EOL;
    }

    preg_replace(
        $regex,
        ' (xx) \2',
        $telefone
    ) . PHP_EOL;
}