<?php

$entrada = readline("Digite um valor: ");

echo "Tipo da entrada: " . gettype($entrada) . "\n";

$solto = ($entrada == 10) ? "true" : "false";
$estrito = ($entrada === 10) ? "true" : "false";

echo "\$entrada == 10  →  $solto\n";
echo "\$entrada === 10 →  $estrito\n";