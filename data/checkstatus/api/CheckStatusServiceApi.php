<?php

class CheckStatusServiceApi {
    public function callApi($transactionId) {
        $url = "https://nextar.flip.id/disburse/" . $transactionId;

        $network = new NetworkBuilder();
        $result = $network->connectApiGet($url);

        return $result;
    }

}