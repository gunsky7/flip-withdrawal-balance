<?php

class NetworkBuilder {
    public function connectApiPost($url, $data) {
        $context = stream_context_create($this->generateOptionsPost($data));
        return file_get_contents($url, false, $context);
    }

    public function connectApiGet($url) {
        $context = stream_context_create($this->generateOptionsGet());
        return file_get_contents($url, false, $context);
    }

    private function generateOptionsPost($data)
    {
        return array("http" => array(
            "method"    => "POST",
            "header"    => "Content-type: application/x-www-form-urlencoded\r\n"
                        . "Authorization: Basic " . base64_encode(API_KEY . ':' . API_PASSWORD) . "\r\n",
            "content"   => $data
        ));
    }

    private function generateOptionsGet() {
        return array("http" => array(
            "method"    => "GET",
            "header"    => "Content-type: application/x-www-form-urlencoded\r\n"
                        . "Authorization: Basic " . base64_encode(API_KEY . ':' . API_PASSWORD) . "\r\n"
        ));
    }
}