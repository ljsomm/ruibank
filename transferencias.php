<?php
  session_start();
  if(!(isset($_SESSION["cpf"]) && isset($_SESSION["senha"]))){
    header("Location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="pt-BR">

<?php require "./components/head.php" ?>

<body id="page-transfer">
  <?php require "./components/header.php" ?>
  <div id='logout'>Sair</div>
  <main>
    
    <div id="transfer-container" class="form-container">
    <div class="header-block"><h2>Transferência</h2><a href="./logs.php">Voltar</a></div>
      <p>Seu saldo atual: R$ 1.500,00</p>

      <form id="transferencia">
        <label for="value-input">Quanto você quer transferir?</label>
        <input id="value-input" name="valor" type="text" placeholder="Digite um valor">

        <label for="cpf-transfer-input">Para quem? (Insira o CPF do favorecido)</label>
        <input id="cpf-transfer-input" name="destino" type="text" placeholder="Digite o CPF" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="11">

        <button id="btn-transferir" type="submit">Transferir</button>
      </form>
    </div>
  </main>
  <script src="src/js/main.js"></script>
  <script src="src/js/events.js"></script>
</body>

</html>