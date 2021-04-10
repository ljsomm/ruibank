<?php
    include "../classes/transfer.php";
    $transfer = new Transfer();
    echo json_encode(array("total"=>$transfer->total(), "quantidade"=>$transfer->quantidade(), "recente"=>$transfer->recente()));