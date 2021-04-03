<!DOCTYPE html>
<html lang="pt-BR">

<?php require "./components/head.php" ?>

<body id="page-logs">
  <?php require "./components/header.php" ?>

  <main>
    <section>
      <h2>Dashboard</h2>
      <div class="grid-cards-container">
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

      <table class="logs">
        <tr>
          <th>Hash</th>
          <th>Origem</th>
          <th>Destino</th>
          <th>Quantia</th>
          <th>Data e hora</th>
        </tr>

        <tr>
          <td>45446f5g4s56a4g5sa</td>
          <td>494925632410</td>
          <td>494925636523</td>
          <td>R$ 150.000,00</td>
          <td>10/10/2021 15:32:00</td>
        </tr>
        <tr>
          <td>45446f5g4s56a4g5sa</td>
          <td>494925632410</td>
          <td>494925636523</td>
          <td>R$ 150.000,00</td>
          <td>10/10/2021 15:32:00</td>
        </tr>
        <tr>
          <td>45446f5g4s56a4g5sa</td>
          <td>494925632410</td>
          <td>494925636523</td>
          <td>R$ 150.000,00</td>
          <td>10/10/2021 15:32:00</td>
        </tr>
        <tr>
          <td>45446f5g4s56a4g5sa</td>
          <td>494925632410</td>
          <td>494925636523</td>
          <td>R$ 150.000,00</td>
          <td>10/10/2021 15:32:00</td>
        </tr>
        <tr>
          <td>45446f5g4s56a4g5sa</td>
          <td>494925632410</td>
          <td>494925636523</td>
          <td>R$ 150.000,00</td>
          <td>10/10/2021 15:32:00</td>
        </tr>
        <tr>
          <td>45446f5g4s56a4g5sa</td>
          <td>494925632410</td>
          <td>494925636523</td>
          <td>R$ 150.000,00</td>
          <td>10/10/2021 15:32:00</td>
        </tr>
        <tr>
          <td>45446f5g4s56a4g5sa</td>
          <td>494925632410</td>
          <td>494925636523</td>
          <td>R$ 150.000,00</td>
          <td>10/10/2021 15:32:00</td>
        </tr>
      </table>
    </section>
  </main>
</body>
</html>