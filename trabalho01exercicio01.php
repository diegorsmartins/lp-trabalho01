<?php

/*
 * Homem = 10,00
 * Mulher = 8,00
 * Cerveja = 2,50
 * Refrigerante = 2,00
 * Espetinho = 4,00
 * Cantores = 3,00 (Cobrado somente abaixo dos 15,00 em comida e bebida)
 * Gar�om = 10%
 */
print "Qual o sexo do cliente?\n";
$sexo = trim ( fgets ( STDIN ) ); // pega o sexo do cliente

print "Quantas cervejas foram consumidas?\n";
$qcerv = trim ( fgets ( STDIN ) ); // quantidade da cerveja

print "Quantos refrigerantes foram consumidos?\n";
$qrefr = trim ( fgets ( STDIN ) ); // quantidade do refrigerante

print "Quantos espetinhos foram consumidos?\n";
$qespt = trim ( fgets ( STDIN ) ); // quantidade do espeto

$vcerv = $qcerv * 2.5; // valor da cerveja
$vrefr = $qrefr * 2; // valor do refrigerante
$vespt = $qespt * 4; // valor do espeto
$comebeb = $vcerv + $vrefr + $vespt; // valor de COMIDA E BEBIDA

if ($sexo == "m" || $sexo == "M") { // valor da ENTRADA
	$entrada = 10;
} else {
	$entrada = 8;
}

if ($comebeb <= 15) { // Verifica se o cliente paga ou n�o os CANTORES
	$cantores = 3;
} else {
	$cantores = 0;
}

$subtotal = $entrada + $comebeb + $cantores; // subtotal somando ENTRADA, COMIDA E BEBIDA e CANTORES

$total = $subtotal * 1.10; // valor TOTAL FINAL
                           
print "R$ " .number_format ($entrada, 2, '.', '.'). " Valor da entrada\n"; // mostra o valor da entrada
print "R$ " .number_format ($comebeb, 2, '.', '.'). " Comida e bebida\n"; // mostra o valor de comida e bebida
print "R$ " .number_format ($cantores, 2, '.', '.'). "  Cantores\n"; // mostra o valor dos cantores, se 0 o consumo de comida e bebida passou de 15,00
print "R$ " .number_format ($subtotal, 2, '.', '.'). "  Subtotal sem '10%'\n"; // mostra o subtotal da entrada, comida, bebida e o cantor
print "----------------------------\n"; // linha para separar o total
print "R$ " .number_format ($total, 2, '.', '.'). "  Total"; // valor que dever� ser pago pelo cliente

?>