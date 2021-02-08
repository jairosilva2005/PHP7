<?php
	// Conexão com o banco de dados
	$ServerName = "localhost";
	$UserName = "root";
	$PassWord = "";
	$DB_Name = "CRUD";

	$Connect = mysqli_connect($ServerName, $UserName, $PassWord, $DB_Name);

	if(mysqli_connect_error()) {
		echo 'Erro: ' . mysqli_connect_error();
	}
?>