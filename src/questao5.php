<?php

$nome = readline("Nome do aluno: ");
$n1 = (float) readline("Primeira nota: ");
$n2 = (float) readline("Segunda nota: ");
$n3 = (float) readline("Terceira nota: ");

$media = ($n1 + $n2 + $n3) / 3;

$aprovado = $media >= 7;
$recuperacao = ($media >= 5) && ($media < 7);

echo "Aluno: {$nome}\n";
echo "Média: " . number_format($media, 2) . "\n";

if ($aprovado) {
    echo "Situação: Aprovado\n";
} elseif ($recuperacao) {
    echo "Situação: Recuperação\n";
} else {
    echo "Situação: Reprovado\n";
}