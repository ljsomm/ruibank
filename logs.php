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

  <div class="fixed-button">
    <button id="btn-transferencia">+</button>
  </div>
  <?php require "./components/header.php" ?>
  <div id='logout'>Sair</div>
  <div class="loader">
          <div class="box-load">
            <div class="load"></div>
            <p>Carregando</p>
          </div>      
  </div>
  <main>

    <section>
      <h2>Dashboard</h2>
      <div id="info" class="grid-cards-container">
        <div class="card">
          <strong>Total movimentado</strong>
          <h3 id="total"></h3>
        </div>

        <div class="card">
          <strong>Quantidade de transações</strong>
          <h3 id="quantidade"></h3>
        </div>

        <div class="card">
          <strong>Última atualização</strong>
          <h3 id="recente"></h3>
        </div>
      </div>
    </section>

    <section id="section-table">
      <h3>Logs</h3>

      <table id="logs" class="logs">
      
      </table>
    </section>
  </main>

  <script src="src/js/main.js"></script>
  <script src="src/js/events.js"></script>
</body>
</html>