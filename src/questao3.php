<?php

$valor = (float) readline("Digite o valor do pedido: ");
$cartao = readline("Cliente possui cartão? (sim/n): ");
$pix = readline("Cliente possui Pix? (s/n): ");

$pagamentoAceito = ($cartao == "s") || ($pix == "s");

if ($pagamentoAceito) {
    echo "Valor do pedido: R$ {$valor}\n";
    echo "Pedido aprovado\n";
} else {
    echo "Pedido recusado: nenhuma forma de pagamento disponível!\n";
}