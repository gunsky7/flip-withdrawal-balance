<?php

class Disburse {
    public function execute() {
        //Mockup data
        $bankCode = "BSM";
        $accountNumber = "1111222233334444";
        $amount = 1000000;
        $remark = "Flip";

        $factory = new DisburseFactory();
        $result = $factory->getData($bankCode, $accountNumber, $amount, $remark);

        $this->generateOutput($result);
    }

    private function generateOutput($result) {
        echo "\nDisburse Response Result:";
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
