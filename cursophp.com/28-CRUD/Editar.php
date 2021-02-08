<?php
// Conexão
include_once './PHP_ACTION/DB_Connect.php';

// Cabeçalho
include_once './INCLUDES/header.php';

if(isset($_GET['ID'])) {
    $ID = mysqli_escape_string($Connect, $_GET['ID']);
    $SQL = "SELECT * FROM Clientes WHERE ID='$ID'";
    $Resultado = mysqli_query($Connect, $SQL);
    $Dados = mysqli_fetch_array($Resultado);
}

?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Editar informações do cliente </h3>
        <form action="./PHP_ACTION/Update.php" method="POST">
            <input type="hidden" name="ID" value="<?php echo $Dados['ID']; ?>">
            <div class="input-filed col s12">
                <input type="text" name="Nome" id="Nome" value="<?php echo $Dados['Nome']; ?>" autocomplete="off">
                <label for="Nome">Nome</label>
            </div>
            <div class="input-filed col s12">
                <input type="text" name="Sobrenome" id="Sobrenome" value="<?php echo $Dados['Sobrenome']; ?>" autocomplete="off">
                <label for="Sobrenome">Sobrenome</label>
            </div>
            <div class="input-filed col s12">
                <input type="text" name="Email" id="Email" value="<?php echo $Dados['Email']; ?>" autocomplete="off">
                <label for="Email">E-mail</label>
            </div>
            <div class="input-filed col s12">
                <input type="text" name="Idade" id="Idade" value="<?php echo $Dados['Idade']; ?>" autocomplete="off">
                <label for="Idade">Idade</label>
            </div>
            <div align="center">
                <button type="submit" class="btn" name="BTN_Editar"> Atualizar </button>
                <a href="index.php" class="btn green"> Lista de Clientes </a>
            </div>
        </form>
    </div>
</div>
<?php
// Rodapé
include_once './INCLUDES/footer.php';
?>