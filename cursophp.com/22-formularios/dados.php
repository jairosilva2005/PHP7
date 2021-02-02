<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Resultado</title>
</head>
<body>
	<div align="center">
		<?php
			$Nome = $_POST['NomeDoUsuario'];
			$Idade = $_POST['IdadeDoUsuario'];
			echo "Seu nome é $Nome e você tem $Idade anos...<br>";
			var_dump($_POST);
		?>
	</div>
</body>
</html>

<!-- Para o método GET você somente precisa trocar $_POST por $_GET. Mas, o método GET não é muito recomendado, porque o mesmo 
	 permite a entrada de dados via URL, é recomendado usar o método $_POST somente por questões de segurança, mas as duas
	 opções funcionam praticamente do mesmo jeito. -->