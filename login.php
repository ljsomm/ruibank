<?php
  session_start();
  if(isset($_SESSION["cpf"]) && isset($_SESSION["senha"])){
    header("Location: logs.php");
  }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php require "./components/head.php" ?>

<body id="page-login">
  <?php require "./components/header.php" ?>

  <main>
    <div class="form-container">
      <h2>Login</h2>
      <p>Entre com seu login e senha</p>

      <form method="POST" name="login" id="login">
        <label for="cpf-input">CPF</label>
        <input id="cpf-input" name="cpf" type="text" placeholder="Digite seu CPF" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="11">

        <label for="password-input">Senha</label>
        <input id="password-input" name="senha" type="password" placeholder="Digite sua senha">
        <button id="btn-login" type="submit">Entrar</button>
      </form>
    </div>
    <p class="msg-erro">TESTE ERO</p>
  </main>
  <script src="src/js/main.js"></script>
  <script src="src/js/events.js"></script>
</body>

</html>