<?php
  session_start();
  if(!(isset($_SESSION["cpf"]) && isset($_SESSION["senha"]))){
    header("Location: index.php");
  }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php require "./components/head.php" ?>

<body id="page-logs">
  <?php require "./components/header.php" ?>
  <div id='logout'>Sair</div>

  <main>
  <div class="fixed-button">
    <button id="btn-transferencia">+</button>
  </div>
    <section>
      <h2>Dashboard</h2>
      <div id="info" class="grid-cards-container">
        <div class="card">
          <strong>Total movimentado</strong>
          <h3>R$ 563.456,12</h3>
        </div>

        <div class="card">
          <strong>Quantidade de transações</strong>
          <h3>+4568</h3>
        </div>

        <div class="card">
          <strong>Última atualização</strong>
          <h3><?= date("d/m/Y H:i:s"); ?></h3>
        </div>
      </div>
    </section>

    <section id="section-table">
      <h3>Logs</h3>

      <table id="logs" class="logs">
        <tr>
          <th>Hash</th>
          <th>Origem</th>
          <th>Destino</th>
          <th>Quantia</th>
          <th>Data e hora</th>
        </tr>

        
      </table>
    </section>
  </main>

  <script src="src/js/main.js"></script>
  <script src="src/js/events.js"></script>
</body>
</html>