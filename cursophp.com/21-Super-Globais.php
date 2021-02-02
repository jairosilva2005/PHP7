<?php 
	// SuperGlobais em PHP
	$x = 10;
	$y = 10;
	function Soma() {
	   return $GLOBALS['x'] + $GLOBALS['y']; // Basicamente, com o método GLOBALS, você consegue ter acesso a variáveis globais
	}
	$RES = Soma();
	echo "Valor retornado da soma: $RES <br>";
	echo "<hr>";

	// SuperGlobal _SERVER - Basicamente, é um Array com um conjunto de informações sobre o Servidor
	echo $_SERVER['PHP_SELF'] . '<br>';
	echo $_SERVER['SERVER_NAME'] . '<br>';
	echo $_SERVER['SCRIPT_FILENAME'] . '<br>';
	echo $_SERVER['DOCUMENT_ROOT'] . '<br>';
	echo $_SERVER['SERVER_PORT'] . '<br>';
	echo $_SERVER['REMOTE_ADDR'] . '<br>';
?>