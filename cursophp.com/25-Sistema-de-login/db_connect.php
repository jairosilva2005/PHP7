<?php 
	// Conexão com o banco de dados
	$ServerName = "localhost";
	$UserName = "root";
	$Password = "";
	$db_name = "SistemaLogin";

	$Connect = mysqli_connect($ServerName, $UserName, $Password, $db_name);
	if(mysqli_connect_error()) {
		echo "Não foi possível conectar ao banco de dados!<br>";
		echo "Erro: " . mysqli_connect_error();
	}
?>