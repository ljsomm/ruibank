<!DOCTYPE html>
<html lang="pt-BR">

<?php require "./components/head.php" ?>

<body id="page-transfer">
  <?php require "./components/header.php" ?>

  <main>
    <div class="form-container">
      <h2>Transferência</h2>
      <p>Seu saldo atual: R$ 1.500,00</p>

      <form action="">
        <label for="value-input">Quanto você quer transferir?</label>
        <input id="value-input" name="value-input" type="number" placeholder="Digite um valor">

        <label for="cpf-input">Para quem? (Insira o CPF do favorecido)</label>
        <input id="cpf-input" name="cpf-input" type="text" placeholder="Digite seu CPF" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="11">

        <button type="submit">Transferir</button>
      </form>
    </div>
  </main>
</body>

</html>