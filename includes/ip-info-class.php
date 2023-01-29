<?php
class IPInfo {
    private $access_token;

    public function __construct($access_token) {
        $this->access_token = $access_token;
    }

    public function getIPDetails($ip) {
        $url = "https://ipinfo.io/{$ip}?token={$this->access_token}";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);
        return json_decode($data);
    }
    
}