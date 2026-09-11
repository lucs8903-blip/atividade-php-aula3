<?php

$num1 = (int) readline("Digite o primeiro número: ");
$num2 = (int) readline("Digite o segundo número: ");

if ($num1 > $num2) {
    echo "O primeiro número é maior.\n";
} elseif ($num1 < $num2) {
    echo "O segundo número é maior.\n";
} else {
    echo "Os dois números são iguais.\n";
}

