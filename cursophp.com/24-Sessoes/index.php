<?php 
	// Sessões em PHP7
	session_start();

	$_SESSION['Cor'] = "Vermelho";
	$_SESSION['Carro'] = "Corvette";
	/*
		--- Notas Finais ---
		Funções que podem ser usadas para gerenciar as sessões:
		- session_start(); Basicamente, ele começa uma sessão em um determinado arquivo, se você quiser acessar
		uma sessão de um arquivo php a outro, é obrigatório você ultilizar o session_start para poder fazer isso.
		- session_unset(); Basicamente, o session_unset é usado para cancelar o registro de uma variável de uma
		sessão. Se você usar o unset com o parâmetro $_SESSION, ele irá cancelar o registro de todas as variáveis 
		da sessão.
		- session_destroy() destrói todos os dados associados com a sessão atual. Ela não apaga nenhuma das variáveis globais associadas à sessão atual, nem apaga o cookie de sessão. Para usar as variáveis de sessão novamente, session_start() deve ser chamada.
	*/
?>