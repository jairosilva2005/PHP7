<?php
	// Laços em PHP

	// Laço for - para
	echo "Utilizando for: <br>";
	for($Cont = 0 ; $Cont <= 10 ; $Cont++) {
		echo "Número: $Cont <br>";
	}
	echo "<hr>";

	// Laço foreach - percorrer arrays
	echo "Utilizando foreach: <br>";
	$Carros = array('Corvette', 'Lamborghini', 'Fiat com escada encima');
	foreach ($Carros as $indice => $Value) {
		echo "$indice - $Value <br>";
	}

	/*
		--- Notas Finais ---
		basicamente, a estrutura for segue o mesmo padrão das outras linguagens:
		for(var;condição;atri) { Bloco de comandos }
		
		foreach serve para percorrer arrays e segue um padrão:
		foreach(Array as indice(Opcional) => var) { Bloco de código }
		onde var será a variável que irá receber os valores do Array
	*/