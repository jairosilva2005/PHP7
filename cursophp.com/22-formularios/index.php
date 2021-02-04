<!DOCTYPE html>
<html lang="pt-br">
<!-- Validações em PHP -->
<!-- 
	Funções filter_input - filter_var
	---------------------------------

	FILTER_VALIDATE_INT
	FILTER_VALIDATE_EMAIL
	FILTER_VALIDATE_FLOAT
	FILTER_VALIDATE_IP
	FILTER_VALIDATE_URL
	---------------------------------
	Como usar um filtro de validação:
	filter_input(INPUT_POST, 'Idade', FILTER_VALIDATE_INT)

	Explicação:
	Basicamente, o primeiro parâmetro de filter_input é o tipo de input, que no nosso caso é do tipo POST
	então você usa INPUT_POST, o segundo parâmetro é o nome do input de validação, que leva como padrão o nome
	do parâmetro "name" do input, e o terceiro, é o tipo de validação.
-->
<?php
	if(isset($_POST['enviou'])) {
		$Erros = array();
		if(!$Idade = filter_input(INPUT_POST, 'Idade', FILTER_VALIDATE_INT)) {
			$Erros[] = "O valor de 'Idade' precisa ser um inteiro!<br>";
		}
		if(!$Email = filter_input(INPUT_POST, 'Email', FILTER_VALIDATE_EMAIL)) {
			$Erros[] = "Preencha o campo de email com um email válido!<br>";
		}
		if(!$Peso = filter_input(INPUT_POST, 'Peso', FILTER_VALIDATE_FLOAT)) {
			$Erros[] = "Preencha o campo de peso com um valor válido!<br>";
		}
		if(!$IP = filter_input(INPUT_POST, 'IP', FILTER_VALIDATE_IP)) {
			$Erros[] = "Preencha o campo de IP com um IP válido!<br>";
		}
		if(!$URL = filter_input(INPUT_POST, 'Url', FILTER_VALIDATE_URL)) {
			$Erros[] = "Preencha o campo de URL com uma URL válida!<br>";
		}

		if(!empty($Erros)) {
			foreach ($Erros as $value) {
				echo "<h3>- $value </h3>";
			}
		}
	}
?>

<head>
	<meta charset="utf-8">
	<title>Formulário</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<label>Idade: </label><input type="text" name="Idade" placeholder="Sua Idade*" autocomplete="off"><br>
		<label>Email: </label><input type="text" name="Email" placeholder="Sua idade*" autocomplete="off"><br>
		<label>Peso: </label><input type="text" name="Peso" placeholder="Seu peso*" autocomplete="off"><br>
		<label>IP: </label><input type="text" name="IP" placeholder="Seu IP*" autocomplete="off"><br>
		<label>URL: </label><input type="text" name="Url" placeholder="Sua URL*" autocomplete="off"><br>
		<button type="submit" name="enviou">Enviar</button>
	</form>
</body>
</html>