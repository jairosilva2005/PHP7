<?php
	// Laços em PHP

	// Laço while - enquanto
	echo "Utilizando while: <br>";
	$Cont_1 = 0;
	while($Cont_1 <= 10) {
		echo "Número: $Cont_1<br>";
		$Cont_1++;
	}
	echo "<hr>";

	// Laço do-while - faça enquanto
	echo "Utilizando do-while: <br>";
	$Cont_2 = 0;
	do {
		echo "Número: $Cont_2<br>";
		$Cont_2++;
	} while($Cont_2 <= 10);

	/*
		--- Notas Finais ---
		Modelo de repetição PHP7:
		while(condição) { Bloco de comandos }
		do { Bloco de comandos } while(condição);

		Basicamente, nesta versão do PHP ele segue o padrão das linguagens.
	*/