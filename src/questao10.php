<?php

$nome = (string) readline("Nome do cliente: ");
$idade = (int) readline("Idade: ");
$renda = (float) readline("Renda mensal: ");
$tempo = (int) readline("Tempo de emprego (meses): ");
$negativado = readline("Está negativado? (s/n): ");

$idadePermitida = ($idade >= 18) && ($idade <= 65);
$rendaOuEstabilidade = ($renda >= 2000) || ($tempo >= 24);
$estaNegativado = ($negativado == "s");

$aprovado = $idadePermitida && $rendaOuEstabilidade && !$estaNegativado;

echo "Idade permitida: " . ($idadePermitida ? "atendida" : "não atendida") . "\n";
echo "Renda ou estabilidade: " . ($rendaOuEstabilidade ? "atendida" : "não atendida") . "\n";
echo "Nome limpo: " . (!$estaNegativado ? "atendida" : "não atendida") . "\n";

if ($aprovado) {
    echo "Resultado: Crédito aprovado para $nome\n";
} else {
    echo "Resultado: Crédito recusado para $nome\n";
}