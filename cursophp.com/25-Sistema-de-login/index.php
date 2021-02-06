<?php
	// Conexão
	require_once "db_connect.php";

	// Sessão
	session_start();

	if(isset($_POST['enviar'])) {
		$Erros = array();
		$login = mysqli_escape_string($Connect, $_POST['login']);
		$senha = mysqli_escape_string($Connect, $_POST['senha']);
		if(empty($login) or empty($senha)) {
			$Erros[] = "<h4>O campo de login está incompleto!</h4>";
		}
		else {
			$SQL = "SELECT login FROM Usuarios WHERE login = '$login'";
			$Resultado = mysqli_query($Connect, $SQL);
			if(mysqli_num_rows($Resultado) > 0) {
				$senha = md5($senha);
				$SQL = "SELECT * FROM Usuarios WHERE login = '$login' and senha = '$senha'";
				$Resultado = mysqli_query($Connect, $SQL);
				if(mysqli_num_rows($Resultado) == 1) {
					$Dados = mysqli_fetch_array($Resultado);
					mysqli_close($Connect);
					$_SESSION['Logado'] = true;
					$_SESSION['Usuario'] = $Dados['ID'];
					header('Location: home.php');
				}
				else {
					$Erros[] = "<h4>Usuário e senha não conferem!</h4>";
				}
			}
			else {
				$Erros[] = "<h4>Você não está logado! Cadastre-se!</h4>";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Login PHP & MySQL</title>
</head>
<body>
	<h2>Login</h2>
	<?php
		if(!empty($Erros)) {
			foreach ($Erros as $value) {
				echo "$value";
			}
		}
	?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<label>Login: </label><input type="text" name="login" autocomplete="off"><br>
		<label>Senha: </label><input type="password" name="senha" autocomplete="off"><br>
		<button type="submit" name="enviar">Logar</button>
	</form>
</body>
</html>