<?php

$idade = (int) readline("Digite sua idade: ");
$ingresso = readline("Possui ingresso? (sim/nao): ");

$acessoLiberado = ($idade >= 18) && ($ingresso == "s");

if ($acessoLiberado) {
    echo "Entrada liberada\n";
} else {
    echo "Acesso negado\n";
}