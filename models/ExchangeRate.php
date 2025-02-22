<?php
class ExchangeRate {
    private $apiUrl = "https://v6.exchangerate-api.com/v6/38a1c99c8157936be1146237/latest/" ;

    public function getRate($from, $to) {
        $url = $this->apiUrl . $from;
        $response = file_get_contents($url);
        $data = json_decode($response, true);
        
        if(isset($data['conversion_rates'][$to])) {
            return $data['conversion_rates'][$to];
        } else {
            return false;
        }
    }
}
?>
