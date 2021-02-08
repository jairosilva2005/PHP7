<?php
// Incluir mensagem
include_once "./INCLUDES/Mensagem.php";

// Conexão
include_once "./PHP_ACTION/DB_Connect.php";

// Cabeçalho
include_once './INCLUDES/header.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light"> Clientes </h3>
    <table class="striped">
      <thead>
        <tr>
          <th>Nome: </th>
          <th>Sobrenome: </th>
          <th>Email: </th>
          <th>Idade: </th>
        </tr>
      </thead> <!-- Minuto: 7:48 -->

      <tbody>
        <?php
        $SQL = 'SELECT * FROM Clientes';
        $Resultado = mysqli_query($Connect, $SQL);
        if(mysqli_num_rows($Resultado)) {
        while ($Dados = mysqli_fetch_array($Resultado)) {
        ?>
          <tr>
            <td><?php echo $Dados['Nome']; ?></td>
            <td><?php echo $Dados['Sobrenome']; ?></td>
            <td><?php echo $Dados['Email']; ?></td>
            <td><?php echo $Dados['Idade']; ?></td>
            <td><a href="Editar.php?ID=<?php echo $Dados['ID']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
            <td><a href="#modal<?php echo $Dados['ID']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
            <!-- Modal Structure -->
            <div id="modal<?php echo $Dados['ID']; ?>" class="modal">
              <div class="modal-content">
                <h4>Oops!</h4>
                <p>Deseja apagar o cliente?!</p>
              </div>
              <div class="modal-footer">
                <form action="./PHP_ACTION/Delete.php" method="POST">
                  <input type="hidden" name="ID" value="<?php echo $Dados['ID']; ?>">
                  <button type="submit" name="BTN_Delete" class="btn red"> Apagar </button>
                  <a href="#!" class="modal-close waves-effect waves-green btn-flat"> Cancelar </a>
                </form>
              </div>
            </div>
          </tr>
        <?php }}
        else {?> 
            <tr>
              <td> - </td>
              <td> - </td>
              <td> - </td>
              <td> - </td>
            </tr>
        <?php } ?>
      </tbody>
    </table>
    <br>
    <a href="./Adicionar.php" class="btn"> Adicionar Clientes </a>
  </div>
</div>
<?php
// Rodapé
include_once './INCLUDES/footer.php';
?>