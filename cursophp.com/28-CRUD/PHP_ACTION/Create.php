<?php
	// Iniciar sessão
	session_start();

	// Conexão
	require_once "DB_Connect.php";

	if(isset($_POST['BTN_Cadastrar'])) {
		$Nome = mysqli_escape_string($Connect, $_POST['Nome']);
		$Sobrenome = mysqli_escape_string($Connect, $_POST['Sobrenome']);
		$Email = mysqli_escape_string($Connect, $_POST['Email']);
		$Idade = mysqli_escape_string($Connect, $_POST['Idade']);

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