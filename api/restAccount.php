<?php
    include "../classes/account.php";
    session_start();
    $acc = new Account($_SESSION["cpf"]);
    echo json_encode(array("saldo"=>$acc->retornaSaldo()));