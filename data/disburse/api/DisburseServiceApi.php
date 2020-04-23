<?php

class DisburseServiceApi
{
    public function callApi($request)
    {
        $url = "https://nextar.flip.id/disburse";
        $data = $this->generateData($request);

        $network = new NetworkBuilder();
        $result = $network->connectApiPost($url, $data);

        return $result;
    }

    private function generateData($request)
    {
        return http_build_query(
            array(
                "bank_code" => $request->getBankCode(),
                "account_number" => $request->getAccountNumber(),
                "amount"    => $request->getAmount(),
                "remark"    => $request->getRemark()
            )
        );
    }
}
