<?php

$mensalidade = readline("Digite o valor da mensalidade: ");
$reajuste = readline("Digite a taxa de reajuste (%): ");

$valorReajuste = $mensalidade * ($reajuste / 100);
$novaMensalidade = $mensalidade + $valorReajuste;

echo "Valor do reajuste: R$ " . $valorReajuste . PHP_EOL;
echo "Nova mensalidade: R$ " . $novaMensalidade;

?>
