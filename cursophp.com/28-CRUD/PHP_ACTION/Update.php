<?php
	// Iniciar sessão
	session_start();

	// Conexão
	require_once "DB_Connect.php";

	if(isset($_POST['BTN_Editar'])) {
		$Nome = mysqli_escape_string($Connect, $_POST['Nome']);
		$Sobrenome = mysqli_escape_string($Connect, $_POST['Sobrenome']);
		$Email = mysqli_escape_string($Connect, $_POST['Email']);
		$Idade = mysqli_escape_string($Connect, $_POST['Idade']);
        $ID = mysqli_escape_string($Connect, $_POST['ID']);

		// Inserção
		$SQL = "UPDATE Clientes SET Nome = '$Nome', Sobrenome = '$Sobrenome', Email = '$Email', Idade = '$Idade' WHERE ID='$ID'";

		// Verificação
		if(mysqli_query($Connect, $SQL)) {
			$_SESSION['Mensagem'] = "Atualização realizada com sucesso!";
			header('Location: ../index.php');
		}
		else {
			$_SESSION['Mensagem'] = "Erro ao realizar atualização!";
			header('Location: ../index.php');
		}
	}
