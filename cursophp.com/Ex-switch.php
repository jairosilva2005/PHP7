<?php
	// Switch em php ->
	/* Switch em php segue o padrão: switch(parameter) {codeblock} */
	echo "Switch em PHP7<br>";
	echo "<hr>";
	$Valor_Teste = 123;
	switch($Valor_Teste/* Nesse caso o parametro de entrada foi a variável $Valor_Teste */) {
		case 123:
			echo "Número 123 está incluso na lista de números do switch<br>";
		break;
		case 345:
			echo "Número 345 está incluso na lista de números do switch<br>";
		break;
		case 324:
			echo "Número 324 está incluso na lista de números do switch<br>";
		break;
		default:
			echo "Provavelmente você inseriu valores inválidos!<br>";
		break;
	}
	/*
		Switch e cases é um tipo de estrutura condicional em que ela recebe um parametro,
		e logo depois verifica se o valor do parâmetro é igual a algum valor das cases
		caso seja, o bloco de código da case é executado, e logo depois, finalzado!

		Switch também podem receber uma variável string como parâmetro, e suas cases também podem conter strings.
		As strings das cases devem estar dentro de aspas duplas.
	*/
?>