<?php
	// Criptografia - Base64
	$Senha = "JairoSilva";
	$CriptoSenha = base64_encode($Senha);
	$DesCriptoSenha = base64_decode($CriptoSenha);
	echo "CriptoSenha - Base64: $CriptoSenha<br>";
	echo "DesCriptoSenha - Base64: $DesCriptoSenha";
	echo "<hr>";

	// Criptografia - sha1
	$SenhaSHA = "JairoHS";
	$DesSHA = sha1($SenhaSHA);
	echo "CriptoSenha - sha1: $DesSHA<br>";
	echo "<hr>";

	// Criptografia - MD5
	$SenhaMD = "123456";
	$CriptoMD = md5($SenhaMD);
	echo "CriptoSenha - MD5: $CriptoMD<br>";
?>