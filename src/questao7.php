<?php

$matricula1 = readline("Digite a primeira matrícula: ");
$matricula2 = readline("Digite a segunda matrícula: ");

if (strcmp($matricula1, $matricula2) < 0) {
    echo "Comparando como texto (strcmp): $matricula1 vem primeiro\n";
} else {
    echo "Comparando como texto (strcmp): $matricula2 vem primeiro\n";
}
if ($matricula1 < $matricula2) {
    echo "Comparando com o operador <: $matricula1 vem primeiro\n";
} else {
    echo "Comparando com o operador <: $matricula2 vem primeiro\n";
}