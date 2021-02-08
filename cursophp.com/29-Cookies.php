<?php
	// Cookies
	setcookie('User', 'JairoSilva', time()+3600);
	setcookie('Email', 'JairoSilva@gmail.com', time()+3600);
	setcookie('Ultimate_search', 'Tenis_da_Nike', time()+3600);
	var_dump($_COOKIE);

	// Cookies ficam guardados no seu navegador, mesmo depois de sair e entrar, ele ainda ficará salvo no seu browser
	/*
		Padrão de Cookies:
		setcookie('Nome_do_Cookie', 'Conteudo_do_Cookie', time()+3600); Esse parâmetro serve para indicar o tempo que
		o Cookie ficará salvo no seu Browser

		Os Cookies ficam guardados na super global $_COOKIE

		Para mostrar o Cookie que você quer, basta usar o echo e dentro do parâmetro o índice(Nome_do_Cookie)
		echo $_COOKIE['Nome_do_Cookie'];
	*/