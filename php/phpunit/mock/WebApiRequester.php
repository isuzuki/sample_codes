<?php

require_once 'WebApiRequestFailedException.php';

class WebApiRequester
{
    public function request(array $params = [])
    {
        list($response, $header) = $this->doHttpRequest('http://localhost:8080/api/test', $params);
        if (empty($response) || empty($header) || $header['http_code'] != 200) {
            throw new WebApiRequestFailedException('通信エラー');
        }

        $response = json_decode($response, true);
        if ($response['status'] != 'success') {
            throw new WebApiRequestFailedException('リクエストエラー');
        }

        return $response;
    }

    protected function doHttpRequest($url, $params)
    {
        $query = http_build_query($params);
        $ch = curl_init($url .'?'. $query);

        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CONNECTTIMEOUT => 5,
        ]);

        $response = curl_exec($ch);
        $header = curl_getinfo($ch);
        curl_close($ch);

        return [$response, $header];
    }
}
