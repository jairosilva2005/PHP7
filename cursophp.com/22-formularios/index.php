<!DOCTYPE html>
<html lang="pt-br">
<!-- Validações em PHP -->
<!-- 
	Validate Filters
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

	Sanitize filters
	---------------------------------

	FILTER_SANITIZE_EMAIL
	FILTER_SANITIZE_INT
	FILTER_SANITIZE_SPECIAL_CHARS
	FILTER_SANITIZE_URL

	Explicação: 
	Basicamente, você filtra um input para que não sejam enviados caracteres inválidos ao banco de dados,
	o uso é basicamente do mesmo jeito, basta trocar de validate para sanitize:
	antes de realizaro validade, certifique-se que você está usando o filter_var no bloco de condição, e usando
	o sanitize corretamente
-->
<?php
	if(isset($_POST['enviou'])) {
		$Erros = array();
		$Nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
		// Nesse exemplo, não validei o nome
		$Idade = filter_input(INPUT_POST, 'Idade', FILTER_SANITIZE_NUMBER_INT);
		if(!filter_var($Idade, FILTER_VALIDATE_INT)) {
			$Erros[] = "O valor de 'Idade' precisa ser um inteiro!<br>";
		}
		$Email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);
		if(!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
			$Erros[] = "Preencha o campo de email com um email válido!<br>";
		}
		$URL = filter_input(INPUT_POST, 'URL', FILTER_SANITIZE_URL);
		if(!filter_var($URL, FILTER_VALIDATE_URL)) {
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
		<label>Nome: </label><input type="text" name="Nome" placeholder="Seu nome*"><br>
		<label>Idade: </label><input type="text" name="Idade" placeholder="Sua Idade*" autocomplete="off"><br>
		<label>Email: </label><input type="text" name="Email" placeholder="Seu Email*" autocomplete="off"><br>
		<label>URL: </label><input type="text" name="URL" placeholder="Sua URL*" autocomplete="off"><br>
		<button type="submit" name="enviou">Enviar</button>
	</form>
</body>
</html>