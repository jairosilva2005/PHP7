<?php 
	// Funções para números

	/* Função number_format - para formatar números */
	echo "Usando a função number_format: <br>";
	$Valor_SF = 3450.00;
	$Valor_CF = number_format($Valor_SF, 2, ",", "."); // Modelo: (Var, ca-decimais, separ-decimal, separ-milhares)
	echo "O valor do produto é: R$ $Valor_CF <br>";
	echo "<hr>";

	/* Função round - basicamente arredonda um numero decimal para um número inteiro */
	echo "Usando a função round: <br>";
	$Num_1 = 56.7;
	$Num_2 = round($Num_1);
	echo "Número 56.7 arredondado: $Num_2 <br>";
	echo "<hr>";

	/* Função ceil - Arredonda valores para cima */
	echo "Usando a função ceil: <br>";
	$Num_3 = 32.1;
	$Num_4 = ceil($Num_3);
	echo "Número 32.1 arredondado: $Num_4 <br>";
	echo "<hr>";

	/* Função floor - Arredonda valores para baixo */
	echo "Usando a função floor: <br>";
	$Num_5 = 39.9;
	$Num_6 = floor($Num_5);
	echo "Número 39.9 arredondado: $Num_6 <br>";
	echo "<hr>";

	/* Função rand - Basicamente sorteia números de um determinado intervalo */
	echo "Usando a função rand: <br>";
	$Numero_Sorteado = rand(1, 20);
	echo "Número sorteiado: $Numero_Sorteado <br>";