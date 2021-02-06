<?php
	// Conexão
	require_once "db_connect.php";

	// Sessão
	session_start();

	// Verificação
	if(!isset($_SESSION['Logado'])){
		header('Location: index.php');
	}

	$ID = $_SESSION['Usuario'];
	$SQL = "SELECT * FROM Usuarios WHERE ID = '$ID'";
	$Resultado = mysqli_query($Connect, $SQL);
	$Dados = mysqli_fetch_array($Resultado);
	mysqli_close($Connect);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Página Inicial</title>
</head>
<body>
	<h1>Olá, seu nome é: <?php echo $Dados['Nome']; ?></h1>
	<a href="logout.php"><button>Sair</button></a>
</body>
</html>