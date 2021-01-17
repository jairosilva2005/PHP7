<?php
	// Arrays em PHP7
	$Carros = array(1 => "Mustang",2 => "Camaro",3 => "Hilux"); // Não é preciso usar os números na criação de Arrays!	
	$Carros[/*Aqui dentro você pode inserir a posição em que o dado será inserido!*/] = "Amarok"; // Inserção de dados em um Array
	// Mostrar um Array usando print_r:
	echo "Mostrar o valor do Array usando print:<br>";
	print_r($Carros);
	echo "<hr>";
	// Mostrar o valor de um Array usando a indicação de índice:
	echo "Mostrar valor usando o a indicação do índice:<br>";
	// Se você fazer uma inserção no Array, o comando echo não funcionará!
	echo "<hr>";

	// Você também poderá criar um Array da seguinte maneira:
	echo "Array seco com inserção de dados:<br>";
	$Motos = array(); // Crie um Array seco e depois vá inserindo os dados
	$Motos[3] = "XJ6-N";
	$Motos[4] = "Hornet";
	print_r($Motos);
	echo "<hr>";
	
	// E você pode criar Arrays da maneira convencional:
	echo "Arrays feitos da maneira convencional:<br>";
	$Pessoas = ["Jão", "Jarro", "Jesíca"];
	print_r($Pessoas);
	echo "<hr>";
	
	// Exibir quantidade de elementos que possui um Array com o count:
	echo "Exibir quantidade de elementos em um Array: <br>";
	$Locais = array("Fernando de Noronha", "Canoa Quebrada", "Serrote da Ocara");
	$QuantidadeDeLocais = count($Locais);
	echo "Quantidade de Locais disponíveis para visitar: $QuantidadeDeLocais <br>";
	echo "São eles: ";
	echo "$Locais[0], $Locais[1], $Locais[1] <br>"; 
	echo "<hr>";
	
	// Arrays Associativos - São Arrays que o índice é uma String e não um número
	echo "Arrays Associativos: <br>";
	$login = array("Nome" => "Jairo", "Idade" => 15, "Altura" => 1.75);
	$login["Cidade"] = "Ocara";
	print_r($login);	
	echo "<hr>";
	
	// Arrays multidimensionais
	echo "Arrays Multidimensionais:<br>";
	$Estados = array(
		"Sul" => array("Paraná", "Santa Catarina", "Rio Grande do Sul"),
		"Nordeste" => array("Ceará", "Pernambuco", "Alagoas"),
		"Norte" => array("Acre", "Amazonas", "Pará")
	);
	echo "Região Sul do Brasil: <br>";
	for($i = 0 ; $i <= 2 ; $i++) {
		echo $Estados["Sul"][$i] . "<br>";
	}
	echo "Região Nordeste do Brasil: <br>";
	for($o = 0 ; $o <= 2 ; $o++) {
		echo $Estados["Nordeste"][$o] . "<br>";
	}
	echo "Região Norte do Brasil <br>";
	for($e = 0 ; $e <= 2 ; $e++) {
		echo $Estados["Norte"][$e] . "<br>";
	}
	
?>
	
