<?php
// Función que verifica si un número es primo
function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i === 0) {
            return false;
        }
    }

    return true;
}

// Itera del 1 al 100 y verifica si cada número es primo
for ($i = 1; $i <= 100; $i++) {
    if (esPrimo($i)) {
        echo $i . ' ';
    }
}
?>
