<?php

$notas = [
    10,
    8,
    7,
    9
];

$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo "Desordenadas: " ;

var_dump($notas);

echo "Ordenadas: ";

var_dump($notasOrdenadas);