<?php
	// Trabalhando com datas em PHP

	// Regula o fuso horário
	date_default_timezone_set('America/Sao_Paulo');
	
	// Mostra a data
	echo date('d/m/Y H:i');
	echo "<hr>";
	
	// DateTime
	$DateTime = date('Y-m-d H:i:s');
	echo $DateTime;
	echo "<hr>";
	
	// Função que retorna a data ->
	function data() {
		$Data = date('d/m/Y');
		return $Data;
	}
	echo data();

	// MKTIME
	echo "<hr>";
	$MK_Date = mktime(20, 30, null, 5, 12, 2021);
	echo date('Y-m-d - H:i', $MK_Date);

	//STR TO TIME
	echo "<hr>";
	$Time = "2021-04-02 13:30:00";
	$STRTime = strtotime($Time);
	echo date('d/m/Y', $STRTime);