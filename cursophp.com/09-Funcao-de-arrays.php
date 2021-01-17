<?php
	// Função de Arrays

	/* Is Arrray */
	echo "Função Is Array: <br>";
	$Locadora_de_Carros = array("Fiat 147", "Uno", "Palio");
	echo is_array($Locadora_de_Carros); // Verifica se é um Array, se for ele retornará o valor 1, senão ele retornará nada
	echo "<hr>";
	
	/* Função In Array */
	echo "Função In Array: <br>";
	$Alunos = array("João", "José", "Maria", "Ana");
	echo in_array("João", $Alunos); // Se o valor existir ele retornará [1]
	echo "<hr>";
	
	/* Array Keys */
	echo "Função Array Keys: <br>";
	$Chaves = array_keys($Alunos); // Retorna um novo Array com o índice do Array usado
	print_r($Chaves);
	echo "<hr>";
	
	/* Array Values */
	echo "Função Array Values: <br>";
	$Valores = array_values($Alunos); // Retorna um novo Array com os valores do Array usado
	print_r($Valores);
	echo "<hr>";
	
	/* Array Merge */
	echo "Função Array Merge: <br>";
	$Carros = array("Uno", "Palio", "Fiat 147");
	$Motos = array("POP 100", "Fan 125", "Honda Titan");
	$Veiculos = array_merge($Carros, $Motos); // Une os valores dois Arrays em um só
	print_r($Veiculos);
	echo "<hr>";
	
	/* Array Pop */
	echo "Função Array Pop: <br>";
	$Cidades = array("Ocara", "Fortaleza", "Quixadá");
	print_r($Cidades);
	echo "<br>";
	array_pop($Cidades); // Exclui o último elemento de um Array
	print_r($Cidades);
	echo "<hr>";
	
	/* Array Shift */
	echo "Função Array Shift: <br>";
	$Bairros = array("Prainha", "Centro", "Boa Esperança");
	print_r($Bairros);
	echo "<br>";
	array_shift($Bairros);
	print_r($Bairros);
	echo "<hr>";
	
	/* Array Unshift */
	echo "Função Array Unshift: <br>";
	$Pessoas = array("Jão", "Felipe", "Jair");
	print_r($Pessoas);
	echo "<br>";
	array_unshift($Pessoas, "Jairo", "José"); // Adiciona um valor ou mais nas primeiras posições do Array
	print_r($Pessoas);
	echo "<hr>";
	
	/* Array Push */
	echo "Função Array Push: <br>";
	$Tranzeuntes = array("Jão", "Felipe", "Jair");
	print_r($Tranzeuntes);
	echo "<br>";
	array_push($Tranzeuntes, "Josyane", "André"); // Adiciona um valor ou mais nas últimas posições do Array
	print_r($Tranzeuntes);
	echo "<hr>";
	
	/* Array Combine */
	echo "Função Array Combine:<br>";
	$Times = array("Vasco", "Flamengo", "Ceará");
	$pos = array("Campeão", "Vice-Campeão", "Terceiro Lugar");
	$Position = array_combine($Times, $pos); // Mescla o valor e o índice de variáveis diferentes
	print_r($Position);
	echo "<hr>";
	
	/* Função Sum */
	echo "Função Sum: <br>";
	$Moedas = array(1, 3, 8, 16);
	$Resultado = array_sum($Moedas); // Voceê também pode permitir que uma variável receba o valor da soma do Array e exibi-lo na tela
	echo 'Usando direto: ' .  array_sum($Moedas) . '<br>'; // A função de sum permite que faça a soma de elementos desde que seja inteiro ou float
	echo 'Usando variável: ' . $Resultado;
	echo "<hr>";

	/* Função Explode */
	echo "Função Explode: <br>";
	$Data = "16/01/2020"; // Cria-se uma variável
	$NewDate = explode("/", $Data); // Crie uma nova variável, e use. Delimitador e String (Nome da variável)
	print_r($NewDate);
	echo "<hr>";
	
	/* Novo exemplo - Sempre passar o parâmetro de delimitador para a função explode */
	echo "Novo exemplo (Função explode):<br>";
	$FraseDoDia = "Hoje.o.dia.foi.louco";
	$FormatFrase = explode(".", $FraseDoDia); // A função explode transforma uma String em Array
	print_r($FormatFrase);
	echo "<hr>";

	/* Função Implode */
	echo "Função Implode: <br>"; // A função Implode transforma um Array em String
	$Animais = array("Cachorro", "Galinha", "Jumento", "Gato"); // Criase um Array
	$FormatAnimais = implode(", ", $Animais); // E logo depois se usa a função
	print_r($FormatAnimais);
?>
