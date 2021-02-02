<?php
	// Operadores lógicos em PHP - Exemplo
	$Nome = "Jairo";
	$Idade = 15;

	// Operador And - &&
	echo "Teste usando operador and:<br>";
	if(($Nome == "Jairo") and ($Idade == 15)) {
		echo "Você é o Jairo!<br>";
	}
	else {
		echo "Você não é o Jairo!<br>";
	}
	echo "<hr>";

	// Operador or - ||
	echo "Teste usando operador or: <br>";
	$Cidade = "Ocara";
	$Estado = "Ceará";
	if(($Cidade == "Ocara") or ($Estado == "Pernambuco")) {
		echo "Sua área está marcada!<br>";
	}
	else {
		echo "Sua área não está marcada!<br>";
	}
	echo "<hr>";

	// Operador - xor
	echo "Teste utilizando o xor: <br>";
	$T_1 = 10;
	$T_2 = 10;
	if(($T_1 == 10) xor ($T_2 == 10)) {
		echo "Isso não acontecerá!<br>";
	}
	else {
		echo "Isso acontecerá!<br>";
	}
	echo "<hr>";

	// Operador de negação - !
	echo "Usando negação em condições: <br>";
	$Carro = "Corvette";
	$Cor = "Vermelho";
	if(!($Carro == "Corvette") and ($Cor == "Vermelho")) {
		echo "Isso não acontecerá!<br>";
	}
	else {
		echo "Isso acontecerá!<br>";
	}

	/*
		--- Notas Finais ---
		Negação: ! É quase o mesmo de diferença!
		Xor: Só retorna verdadeira se as duas expressões(ou uma) forem falsas
	*/