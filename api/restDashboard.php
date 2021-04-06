<?php
    include "../classes/transfer.php";
    $trasnfer = new Transfer();
    echo json_encode(array("total"=>$trasnfer->total(), "quantidade"=>$transfer->quantidade(), "recente"=>$transfer->recente()));