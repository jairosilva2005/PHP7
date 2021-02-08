<?php
	// Iniciar sessão
	session_start();

	// Conexão
	require_once "DB_Connect.php";

	// Clear
	function clear($input) {
		global $Connect;

		// SQL Injection
		$Var = mysqli_escape_string($Connect, $input);
		// XSS
		$Var = htmlspecialchars($Var);
		return $Var;
	}

	if(isset($_POST['BTN_Cadastrar'])) {
		$Nome = clear($_POST['Nome']);
		$Sobrenome = clear($_POST['Sobrenome']);
		$Email = clear($_POST['Email']);
		$Idade = clear($_POST['Idade']);

		// Inserção
		$SQL = "INSERT INTO Clientes (Nome, Sobrenome, Email, Idade) values ('$Nome', '$Sobrenome', '$Email', '$Idade')";

		// VErificação
		if(mysqli_query($Connect, $SQL)) {
			$_SESSION['Mensagem'] = "Cadastro feito com sucesso!";
			header('Location: ../index.php');
		}
		else {
			$_SESSION['Mensagem'] = "Erro ao realizar cadastro!";
			header('Location: ../index.php');
		}
	}
?>