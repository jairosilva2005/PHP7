<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf8">
	<title>Tela de Login</title>
	<link rel="stylesheet" href="./CSS/main.css">
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" id="formulario">
		<input type="email" name="Email" placeholder="Seu email*" autocomplete="off"><br>
		<label id="AvisoEmail"></label><br>
		<input type="password" name="Senha" placeholder="Sua senha*" autocomplete="off" maxlength="8"><br>
		<label id="AvisoSenha"></label><br>
		<button type="submit" name="enviar">Login</button>
	</form>
</body>
<?php
	if(isset($_POST['enviar'])) {
		$Email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);
		if(!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
			echo "<script>document.getElementById('AvisoEmail').innerHTML = `O email deve ser válido!`;</script>";
		}
		$Tamanho_da_senha = strlen($_POST['Senha']);
		if(!$Tamanho_da_senha == 8) {
			echo "<script>document.getElementById('AvisoSenha').innerHTML = `A senha deve ter no mínimo 8 dígitos!`;</script>";
		}
	}
?>
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
</html>