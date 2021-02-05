<!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="utf-8">
	<title>Upload de Arquivos</title>
</head>
<?php
	if(isset($_POST['Enviar-Arquivo'])) {
		$Tipos_Permitidos = array("png", "jpg", "jpeg", "gif");
		$QuantidadeDeArquivos = count($_FILES['Arquivo']['name']);
		$Contador = 0;
		while ($Contador < $QuantidadeDeArquivos) {
			$Extensao = pathinfo($_FILES['Arquivo']['name'][$Contador], PATHINFO_EXTENSION);
			if(in_array($Extensao, $Tipos_Permitidos)) {
				$Pasta = "Arquivos/";
				$TEMP = $_FILES['Arquivo']['tmp_name'][$Contador];
				$NovoNome = uniqid().".$Extensao";
				if(move_uploaded_file($TEMP, $Pasta.$NovoNome)) {
						echo $Contador + 1 . " - Upload feito com sucesso!<br>";
					}
				else {
						echo "Erro no Upload! [Error 202]<br>";
					}
			}
			else {
					echo "$Extensao não é permitido!";
				}
			$Contador++;
		}
	}
?>
<body>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
		<input type="file" name="Arquivo[]" multiple><br>
		<input type="submit" name="Enviar-Arquivo" value="Enviar">
	</form>
</body>
<!--
	- Notas finais
	Funções utilizadas nesse exercício e oque elas retornam:
	pathinfo - retorna o tipo de extensão de um Arquivo
	in_array - Verifica se determinado valor está no Array
	uniqid() - Ele faz um id novo a cada execução
	move_upload_file - Move determinado arquivo para uma pasta
	count - retorna o tanto de arquivos(ou elementos) em um array
-->
</html>