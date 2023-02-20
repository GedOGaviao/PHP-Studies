<?php

$contador = 1;

/* while ($contador <= 15) {
echo "#$contador" . PHP_EOL;
$contador+= 1;
} */

for ($i = 1; $i <= 15; $i++) {
    if ($i == 13) {
        continue;
    }

    echo "#$i" . PHP_EOL;
}