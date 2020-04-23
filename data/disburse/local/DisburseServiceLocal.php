<?php

class DisburseServiceLocal {
    public function save($disburseModel) {
        // Create connection
        $conn = new mysqli(DB_SERVER_NAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO " . DB_TABLE_NAME . " (transaction_id, amount, "
        ."status, timestamp, bank_code, account_number, beneficiary_name, remark, receipt, time_served, fee)"
        ." VALUES (". $disburseModel->getId() .", ". $disburseModel->getAmount() .", '". $disburseModel->getStatus() 
        ."', '". $disburseModel->getTimestamp() ."', '". $disburseModel->getBankCode() 
        ."', '". $disburseModel->getAccountNumber() ."', '". $disburseModel->getBeneficiaryName() 
        ."', '". $disburseModel->getRemark() ."', '". $disburseModel->getReceipt() 
        ."', '". $disburseModel->getTimeServed() ."', ". $disburseModel->getFee() .")";

        if ($conn->query($sql) === TRUE) {
            echo "\nData is inserted successfully to database\n";
        } else {
            echo "\nError: " . $sql . "<br>" . $conn->error . "\n";
        }

        $conn->close();
    }

    public function update($disburseModel) {
        // Create connection
        $conn = new mysqli(DB_SERVER_NAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE " . DB_TABLE_NAME . " SET status='" . $disburseModel->getStatus() 
        . "', receipt='" . $disburseModel->getReceipt() . "', time_served='" . $disburseModel->getTimeServed() . "' "
        . "WHERE transaction_id=" . $disburseModel->getId();

        if ($conn->query($sql) === TRUE) {
            echo "\nData is updated successfully to database\n";
        } else {
            echo "\nError: " . $sql . "<br>" . $conn->error . "\n";
        }

        $conn->close();
    }
}