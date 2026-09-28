<?php

$salarioBruto = readline("Digite o salário bruto: ");
$desconto = readline("Digite o percentual de desconto (%): ");

$valorDesconto = $salarioBruto * ($desconto / 100);
$salarioLiquido = $salarioBruto - $valorDesconto;

echo "Desconto: R$ " . $valorDesconto . PHP_EOL;
echo "Salário líquido: R$ " . $salarioLiquido;

?>
