<?php
	// Funções para Strings

	/* Função strtoupper - Transformar uma String em letras maiúsculas */
	echo "Usando a função strtoupper: <br>";
	$Nome = 'JairoSilva';
	$Nome_MA = strtoupper($Nome);
	echo "Nome em maiúsculas: $Nome_MA <br>";
	echo "<hr>";

	/* Função strtolower - Transformat uma String em letras minúsculas */
	echo "Usando a função strtolower <br>";
	$Nome_MI = strtolower($Nome);
	echo "Nome em minúsculas: $Nome_MI <br>";
	echo "<hr>";

	/* Função str substr - Pega valores a partir de determinado caractere*/
	echo "Usando a função substr: <br>";
	$Cidade = "Minha cidade lindinha!<br>";
	$Cidade_S = substr($Cidade, 13); // Você também pode colocar outro parâmetro: substr($Cidade, 13, 5) ele irá pegar três caracteres depois do caractere inicial
	echo "A partir do caractere 13: $Cidade_S";
	echo "<hr>";

	/* Função str_pad - pega uma determinada quantia de caraceteres */
	echo "Usando str_pad: <br>";
	$Barco = "Barquinho";
	$Barco_F = str_pad($Barco, 10, "*"); // str_pad(var, tanto_de_caraceteres, caractere_para_ser_concatenado);
	echo "String com str_pad: $Barco_F<br>";
	echo "<hr>";

	/* Função str_repeat - Basicamente, é inserir palavras repetidas em uma String */
	echo "Função str_repeat: <br>";
	$Repeat = str_repeat("Alegria! ", 2);
	echo "Palavra repetida duas vezes: $Repeat<br>";
	echo "<hr>";

	/* Função strlen - Basicamente só retorna a quantidade de caracteres de uma String */
	echo "Usando a função strlen: <br>";
	$Tam = "Essa frase possui 35 caracteres<br>";
	$Tam_S = strlen($Tam);
	echo "Tanto de caracteres: $Tam_S<br>";
	echo "<hr>";

	/* Função str_replace - Busca uma palavra e a substitúi */
	echo "Usando a função replace: <br>";
	$Text = "O Jairo é ruim!";
	$New_Text = str_replace("ruim", "bom", $Text);
	echo "Texto antes do replace: $Text <br>";
	echo "Texto depois do replace: $New_Text <br>";
	echo "<hr>";

	/* Função strpos - Basicamente, retorna a posição onde determinado caractere ou string está */
	echo "Usando a função str_pos: <br>";
	$POS = "Diga-me em qual posição está a palavra: GENTE";
	$POS_R = strpos($POS, "GENTE");
	echo "Está na posição: $POS_R <br>";

	/*
		--- Notas Finais ---
		Basicamente, são funções que podem alterar, manipular e encontrar strings e caracteres,
		para saber mais sobre essas e outras funções, é recomendado a documentação.
	*/