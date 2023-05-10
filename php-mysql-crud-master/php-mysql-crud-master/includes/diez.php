<?php
// Itera del 1 al 100
for ($i = 1; $i <= 100; $i++) {
    // Imprime el número actual y añade un espacio después
    echo $i . ' ';

    // Si el número actual es divisible entre 10, imprime un salto de línea
    if ($i % 10 === 0) {
        echo "\n";
    }
}
?>