<?php

$quantidade = readline("Digite a quantidade de itens vendidos: ");
$valor = readline("Digite o valor de cada item: ");

$total = $quantidade * $valor;

echo "O total é: R$ " . $total;

?>
