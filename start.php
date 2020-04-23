<?php

// Usecase
include("usecase/Disburse.php");
include("usecase/CheckStatus.php");

// Domain
include("domain/DisburseFactory.php");
include("domain/CheckStatusFactory.php");

// Data
include("data/disburse/api/DisburseServiceApi.php");
include("data/disburse/local/DisburseServiceLocal.php");
include("data/checkstatus/api/CheckStatusServiceApi.php");

// Model
include("model/DisburseRequest.php");
include("model/DisburseResponse.php");

// Network
include("network/NetworkBuilder.php");

// Config
include("config.php");

while (true) {
    echo "================================================\n";
    echo "Choose Feature:\n";
    echo "1. Disburse\n";
    echo "2. Check Status\n";
    echo "3. Exit\n";
    echo "Please enter your choice(1/2/3): ";
    $handle = fopen("php://stdin", "r");
    $line = fgets($handle);
    if (trim($line) == "1") {
        $disburse = new Disburse();
        $disburse->execute();
    } else if (trim($line) == "2") {
        $checkStatus = new CheckStatus();
        $checkStatus->execute();
    } else if (trim($line) == "3") {
        fclose($handle);
        echo "Thank you";
        exit;
    }
}
