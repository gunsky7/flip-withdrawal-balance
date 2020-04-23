<?php

class CheckStatus {
    public function execute() {
        $transactionId = $this->getTransactionId();

        $factory = new CheckStatusFactory();
        $result = $factory->getData($transactionId);

        $this->generateOutput($result);
    }

    private function getTransactionId() {
        echo "Please enter transaction id: ";
        $handle = fopen("php://stdin", "r");
        $line = fgets($handle);
        fclose($handle);
        return trim($line);
    }

    private function generateOutput($result) {
        echo "\nCheck Status Response Result:";
        echo "\nid: " . $result->getId();
        echo "\namount: " . $result->getAmount();
        echo "\nstatus: " . $result->getStatus();
        echo "\ntimestamp: " . $result->getTimestamp();
        echo "\nbank_code: " . $result->getBankCode();
        echo "\naccount_number: " . $result->getAccountNumber();
        echo "\nbeneficiary_name: " . $result->getBeneficiaryName();
        echo "\nremark: " . $result->getRemark();
        echo "\nreceipt: " . $result->getReceipt();
        echo "\ntime_served: " . $result->getTimeServed();
        echo "\nfee: " . $result->getFee() . "\n\n";
    }
}