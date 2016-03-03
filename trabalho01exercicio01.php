<?php

/*
 * Homem = 10,00
 * Mulher = 8,00
 * Cerveja = 2,50
 * Refrigerante = 2,00
 * Espetinho = 4,00
 * Cantores = 3,00 (Cobrado somente abaixo dos 15,00)
 * Garçom = 10%
 */
print "Qual o sexo do cliente?\n";
$sexo = trim ( fgets ( STDIN ) ); /* pega o sexo do cliente */

print "Quantas cervejas foram consumidas?\n";
$qcerv = trim ( fgets ( STDIN ) ); /* quantidade da cerveja */

print "Quantos refrigerantes foram consumidos?\n";
$qrefr = trim ( fgets ( STDIN ) ); /* quantidade do refrigerante */

print "Quantos espetinhos foram consumidos?\n";
$qespt = trim ( fgets ( STDIN ) ); /* quantidade do espeto */

$vcerv = $qcerv * 2.5; /* valor da cerveja */
$vrefr = $qrefr * 2; /* valor do refrigerante */
$vespt = $qespt * 4; /* valor do espeto */
$comebeb = $vcerv + $vrefr + $vespt; /* valor de COMIDA E BEBIDA */

if ($sexo == "m" || $sexo == "M") { /* valor da ENTRADA */
	$entrada = 10;
} else {
	$entrada = 8;
}

$subtotal1 = $entrada + $comebeb; /* subtotal entre ENTRADA e COMIDA E BEBIDA */

/* Verifica se o cliente paga ou não o CANTOR */

if ($subtotal1 <= 15) {
	$cantores = 3
} else {
	$cantores = 0
}
}

$subtotal2 = $subtotal1 + $cantores; /* subtotal somando ENTRADA, COMIDA E BEBIDA e CANTORES */

$total = $subtotal2 * 1.10; /* valor TOTAL FINAL */

print "$entrada Valor da entrada\n";
print "$comebeb Comida e bebida\n";
print "$cantores Cantores\n";
print "$subtotal2 Subtotal sem '10%'\n";
print "----------------------------\n";
print "$total Total";

?>