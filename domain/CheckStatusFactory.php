<?php

class CheckStatusFactory
{
    public function getData($transactionId)
    {
        $data = new CheckStatusServiceApi();

        return $this->generateResponse($data->callApi($transactionId));
    }

    public function generateResponse($response)
    {
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

    private function saveToLocal($disburseModel)
    {
        $disburseServiceLocal = new DisburseServiceLocal();
        $disburseServiceLocal->update($disburseModel);
    }
}
