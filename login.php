<!DOCTYPE html>
<html lang="pt-BR">

<?php require "./components/head.php" ?>

<body id="page-login">
  <?php require "./components/header.php" ?>

  <main>
    <div class="form-container">
      <h2>Login</h2>
      <p>Entre com seu login e senha</p>

      <form action="">
        <label for="cpf-input">CPF</label>
        <input id="cpf-input" name="cpf-input" type="text" placeholder="Digite seu CPF" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="11">

        <label for="password-input">Senha</label>
        <input id="password-input" name="password-input" type="password" placeholder="Digite sua senha">

        <button type="submit">Entrar</button>
      </form>
    </div>
  </main>
</body>

</html>