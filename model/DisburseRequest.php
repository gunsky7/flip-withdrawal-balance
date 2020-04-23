<?php

class DisburseRequest {
    public $bankCode;
    public $accountNumber;
    public $amount;
    public $remark;

    public function setBankCode($bankCode) {
        $this->bankCode = $bankCode;
    }

    public function getBankCode() {
        return $this->bankCode;
    }

    public function setAccountNumber($accountNumber) {
        $this->accountNumber = $accountNumber;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function setRemark($remark) {
        $this->remark = $remark;
    }

    public function getRemark() {
        return $this->remark;
    }
}