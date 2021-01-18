<?php /* Aula de condicionais PHP7 */

	// No PHP7 usamos o mesmo "nome" de condicionais do C++ [if, else, elseif]
	echo "Condições Normais: <br>";
	$Numero = 10;
	if($Numero == 10){
		echo "É igual a 10!<br>";
	}
	elseif($Numero == 11) {
		echo "Número igual a 11!<br>";
	}
	else{
		echo "Não é igual a dez!<br>";
	}
	echo "<hr>";

	// Exemplo envolvendo a média escolar:
	echo "Condições normais: <br>";
	$Media = 5.9;
	echo "Média: $Media<br>";
	if($Media >= 6) {
		echo "Aprovado!<br>";
	}
	else {
		echo "Reprovado!<br>";
	}
	echo "<hr>";

	// Exemplo de operador ternário em PHP7:
	echo "Operador terńário: <br>"; 
	$Idade = 18;
	echo ($Idade >= 18) ? "Maior de idade!" : "Menor de idade!"; // Exemplo utilizando operador ternário

	// Notas finais:
	/* 
		Modelo de condições: if, else, elseif. Todas ultilizam o mesmo modelo: -TypeCondition- (condition) {CodeBlock}
		Modelo de operador ternário: (condition) ? "CodeBlock" : "CodeBlock";
	 */
?>