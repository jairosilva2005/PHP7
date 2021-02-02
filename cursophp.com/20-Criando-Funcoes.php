<?php
	// Criando funções de retorno em PHP

	function ExibirNome($Nome) {
		echo "É um prazer te conhecer $Nome! <br>";
	}
	ExibirNome("Jairo");
	echo "<hr>";

	/*
		Existem duas maneiras de passar parâmetros em PHP
		- Maneira direta: 
		ExibirNome("Jairo");
		- Ou criando uma variável e passando ela como parâmetro
		$Nome = "Jairo";
		ExibirNome($Nome);

		No caso acima, não tem nenhum erro de sintaxe, porque variáveis de escopo local não dão
		coincidência com as de escopo global
	*/

	$Nome_Do_Aluno = "Jairo Silva";
	$Primeira_Nota = 8.5;
	$Segunda_Nota = 9.0;
	$Terceira_Nota = 10.0;

	function Calcular_Media($Nome, $P_Nota, $S_Nota, $T_Nota) {
		$Calculo = ($P_Nota + $S_Nota + $T_Nota) / 3.0;
		if($Calculo >= 6.0 && $Calculo <= 10.0) {
			$Media_F = round($Calculo);
			echo "O Aluno $Nome foi aprovado! Com média: $Media_F<br>";
		}
		else if($Calculo < 6.0 && $Calculo >= 5.0) {
			$Media_F = round($Calculo);
			echo "O aluno $Nome está de recuperação! Com média: $Media_F<br>";
		}
		else if($Calculo < 5.0 && $Calculo > 0.0) {
			$Media_F = round($Calculo);
			echo "O aluno $Nome foi reprovado! Com média $Media_F<br>";
		}
		else {
			echo "Provavelmente você inseriu valores inválidos! <br>";
		}
	}
	Calcular_Media($Nome_Do_Aluno, $Primeira_Nota, $Segunda_Nota, $Terceira_Nota);