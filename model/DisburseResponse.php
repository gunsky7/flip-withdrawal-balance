<?php

class DisburseResponse {
    public $id;
    public $amount;
    public $status;
    public $timestamp;
    public $bankCode;
    public $accountNumber;
    public $beneficiaryName;
    public $remark;
    public $receipt;
    public $timeServed;
    public $fee;

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setTimestamp($timestamp) {
        $this->timestamp = $timestamp;
    }

    public function getTimestamp() {
        return $this->timestamp;
    }

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

    public function setBeneficiaryName($beneficiaryName) {
        $this->beneficiaryName = $beneficiaryName;
    }

    public function getBeneficiaryName() {
        return $this->beneficiaryName;
    }

    public function setRemark($remark) {
        $this->remark = $remark;
    }

    public function getRemark() {
        return $this->remark;
    }

    public function setReceipt($receipt) {
        $this->receipt = $receipt;
    }

    public function getReceipt() {
        return $this->receipt;
    }

    public function setTimeServed($timeServed) {
        $this->timeServed = $timeServed;
    }

    public function getTimeServed() {
        return $this->timeServed;
    }

    public function setFee($fee) {
        $this->fee = $fee;
    }

    public function getFee() {
        return $this->fee;
    }
}