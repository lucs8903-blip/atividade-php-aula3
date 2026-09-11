<?php

$entrada = readline("Digite a nota: ");

if (!is_numeric($entrada) || ($entrada < 0 || $entrada > 10)) {
    echo "Nota inválida. Digite um número entre 0 e 10.\n";
} else {
    echo "Nota registrada: " . (float) $entrada . "\n";
}