<?php
	// Operadores de comparação em PHP7 podem ser usados nas condições
	/*
	Operador de igualdade: ==
	Operador de não-igualdade: !=
	Operador de identidade: ===
	Operador de não-identidade: !===
	Operador de diferença: < >
	Operador maior-que: >
	Operador menor-que: <
	Operador maior-igual: >=
	Operador menor-igual: <=
	-------------------------------
	Operador space: <=>
	Esse último operador retorna três valores:
	-1 - Se o valor da esquerda for menor
	0 - Se os valores forem iguais
	1 - Se o valor da direita for menor
	*/

	// Exemplo de igualdade:
	$iG_1 = 12;
	$iG_2 = 12;
	echo "Teste de igualdade: <br>";
	if($iG_1 == $iG_2) {
		echo "Valores iguais!<br>";
	}
	else {
		echo "Valores diferentes!<br>";
	}
	echo "<hr>";
	
	// Exemplo de não-igualdade:
	$nI_1 = 10;
	$nI_2 = 12;
	echo "Teste de não-igualdade: <br>";
	if($nI_1 != $nI_2) {
		echo "Valores diferentes! <br>";
	}
	else {
		echo "Valores iguais! <br>";
	}
	echo "<hr>";

	// Exemplo de identidade:
	echo "Teste de idêntidade: <br>";
	$Iden_1 = "Jairo";
	$Iden_2 = "Jairo";
	if($Iden_1 === $Iden_2) {
		echo "Strings idênticas! <br>";
	}
	else {
		echo "Strings não idênticas! <br>";
	}
	echo "<hr>";

	// Teste de não-identidade:
	echo "Teste de não-identidade: <br>";
	$nIden_1 = "Jairo";
	$nIden_2 = "Jairo!";
	if($nIden_1 !== $nIden_2) {
		echo "Valores não-identicos! <br>";
	}
	else {
		echo "Valores idênticos! <br>";
	}
	echo "<hr>";

	// Teste de diferença:
	$Di_1 = 13;
	$Di_2 = 13;
	echo "Teste de diferença: <br>";
	if($Di_1 <> $Di_2) {
		echo "Valores diferentes!";
	}
	else {
		echo "Valores iguais! <br>";
	}
	echo "<hr>";

	// Teste maior e menor que:
	$MQ_1 = 12;
	$MQ_2 = 14;
	echo "Teste de maior e menor que: <br>";
	if($MQ_1 > $MQ_2) {
		echo "$MQ_1 é maior que $MQ_2 <br>";
	}
	else if($MQ_1 < $MQ_2) {
		echo "$MQ_2 é maior que $MQ_1 <br>";
	}
	echo "<hr>";

	// Teste Menor-igual -- Maior-igual
	echo "Teste de igual-maior || igual-menor: <br>";
	$MI_1 = 13;
	$MI_2 = 13;
	if($MI_1 <= $MI_2) {
		echo "$MI_1 está abaixo ou igual a $MI_2 <br>";
	}
	else if($MI_1 >= $MI_2) {
		echo "$MI_1 está acima ou igual a $MI_2 <br>";
	}
	echo "<hr>";

	// Teste space
	echo "Teste de space: <br>";
	$SP_1 = 12;
	$SP_2 = 11;
	var_dump($SP_1 <=> $SP_2);
	echo "<hr>";