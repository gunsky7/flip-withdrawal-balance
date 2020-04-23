<?php

class DisburseFactory
{
    public function getData($bankCode, $accountNumber, $amount, $remark)
    {
        $data = new DisburseServiceApi();

        return $this->generateResponse($data->callApi($this->generateRequest($bankCode, $accountNumber, $amount, $remark)));
    }

    public function generateRequest($bankCode, $accountNumber, $amount, $remark)
    {
        $request = new DisburseRequest();
        $request->setBankCode($bankCode);
        $request->setAccountNumber($accountNumber);
        $request->setAmount($amount);
        $request->setRemark($remark);

        return $request;
    }

    public function generateResponse($response) {
        $responseModel = json_decode($response);
        $disburseModel = new DisburseResponse();
        $disburseModel->setId($responseModel->id);
        $disburseModel->setAmount($responseModel->amount);
        $disburseModel->setStatus($responseModel->status);
        $disburseModel->setTimestamp($responseModel->timestamp);
        $disburseModel->setBankCode($responseModel->bank_code);
        $disburseModel->setAccountNumber($responseModel->account_number);
        $disburseModel->setBeneficiaryName($responseModel->beneficiary_name);
        $disburseModel->setRemark($responseModel->remark);
        $disburseModel->setReceipt($responseModel->receipt);
        $disburseModel->setTimeServed($responseModel->time_served);
        $disburseModel->setFee($responseModel->fee);

        $this->saveToLocal($disburseModel);

        return $disburseModel;
    }

    private function saveToLocal($disburseModel) {
        $serviceLocal = new DisburseServiceLocal();
        $serviceLocal->save($disburseModel);
    }
}
