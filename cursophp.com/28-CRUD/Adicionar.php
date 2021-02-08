<?php
  // Cabeçalho
  include_once './INCLUDES/header.php';
?>
<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light"> Novo Cliente </h3>
    <form action="./PHP_ACTION/Create.php" method="POST">
      <div class="input-filed col s12">
        <input type="text" name="Nome" id="Nome" autocomplete="off">
        <label for="Nome">Nome</label>
      </div>
      <div class="input-filed col s12">
        <input type="text" name="Sobrenome" id="Sobrenome" autocomplete="off">
        <label for="Sobrenome">Sobrenome</label>
      </div>
      <div class="input-filed col s12">
        <input type="text" name="Email" id="Email" autocomplete="off">
        <label for="Email">E-mail</label>
      </div>
      <div class="input-filed col s12">
        <input type="text" name="Idade" id="Idade" autocomplete="off">
        <label for="Idade">Idade</label>
      </div>
      <div align="center">
        <button type="submit" class="btn" name="BTN_Cadastrar"> Cadastrar </button>
        <a href="index.php" class="btn green"> Lista de Clientes </a>
      </div>
    </form>
  </div>
</div>
<?php
  // Rodapé
  include_once './INCLUDES/footer.php';
?>