<?php
print "Digite rendimentos banc�rios:\n"; // pega o valor de rendimentos banc�rios
$banc = trim ( fgets ( STDIN ) );
print "Digite sal�rios ou servi�os:\n"; // pega o valor de sal�rios e servi�os
$sala = trim ( fgets ( STDIN ) );
print "Digite outros rendimentos:\n"; // pega o valor de outros rendimentos
$outr = trim ( fgets ( STDIN ) );
print "Digite os servi�os m�dicos pagos:\n"; // pega o valor de servi�os m�dicos PAGOS
$medc = trim ( fgets ( STDIN ) );
print "Digite os servi�os educacionais pagos:\n"; // pega o valor de educa��o PAGOS
$educ = trim ( fgets ( STDIN ) );

/*
 * 20% sobre os rendimentos banc�rios
 * - As seguintes porcentagens para os rendimentos anuais de sal�rio ou servi�os:
 * - At� $8000 - isento
 * - Entre $8000,01 e $24000 - 15%
 * - Acima de $24000 - 20%
 * - Outros rendimentos: 10%
 * - O contribuinte pode abater at� 30% do seu imposto com servi�os m�dicos e/ou educacionais.
 */
$ibanc = 0.2 * $banc; // calcula o imposto sobre RENDIMENTOS BANCARIOS

if ($sala <= 8000) { // calcula imposto sobre o SAL�RIO
	$isala = 0;
} else if ($sala >= 8000.01 && $sala <= 24000) {
	$isala = 0.15 * $sala;
} else if ($sala > 24000) {
	$isala = 0.2 * $sala;
}

$ioutr = 0.1 * $outr; // calcula o imposto sobre OUTROS RENDIMENTOS

$subtotal = $ibanc + $isala + $ioutr; // calcula SUBTOTAL dos impostos

$pabat = $medc + $educ; // soma os valores de MEDICO e EDUCA��O

$mabat = 0.3 * $subtotal;

if (0.3 * $subtotal == 0) {
	$abat = 0;
} else if (0.3 * $subtotal > $pabat) {
	$abat = $pabat;
} else {
	$abat = 0.3 * $subtotal;
}

$total = $subtotal - $abat; // valor total do imposto a ser pago

print "TOTAL DE IMPOSTOS\n";
print "R$ " . number_format ( $ibanc, 2, ',', '.' ) . " Impostos sobre rendimentos bancarios\n";
print "R$ " . number_format ( $isala, 2, ',', '.' ) . " Impostos sobre rendimentos de salarios e\ou servi�os\n";
print "R$ " . number_format ( $ioutr, 2, ',', '.' ) . " Impostos sobre outros rendimentos\n";
print "R$ " . number_format ( $subtotal, 2, ',', '.' ) . " Total\n";
print "------------------------------------\n";
print "R$ " . number_format ( $mabat, 2, ',', '.' ) . " M�ximo a ser abatido\n";
print "------------------------------------\n";
print "TOTAL DE VALORES POSS�VEIS DE ABATER\n";
print "R$ " . number_format ( $medc, 2, ',', '.' ) . " Servi�os m�dicos\n";
print "R$ " . number_format ( $educ, 2, ',', '.' ) . " Servi�os educacionais\n";
print "R$ " . number_format ( $pabat, 2, ',', '.' ) . " Total\n";
print "------------------------------------\n";
print "IMPOSTO TOTAL\n";
print "R$ " . number_format ( $subtotal, 2, ',', '.' ) . " Imposto Bruto\n";
print "R$ " . number_format ( $abat, 2, ',', '.' ) . " Abatimentos\n";
print "R$ " . number_format ( $total, 2, ',', '.' ) . " Total\n";
?>