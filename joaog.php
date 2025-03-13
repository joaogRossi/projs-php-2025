<?php

$proprietario = "João Guilherme";
$locador = "Nicole";
$valor = 1200;
$porcent_reajuste = 10;
$novo_valor = $valor * ( $porcent_reajuste / 100 + 1 );

echo "<h1>Proprietario: $proprietario</h1></br>";
echo "<h1>Locador: $locador</h1></br>";
echo "Valor reajustado: <mark>$novo_valor</mark></br>";
echo "Valor: <mark>$valor</mark></br>";
echo "Porcentagem reajustada: <mark>$porcent_reajuste</mark></br>";
?>  