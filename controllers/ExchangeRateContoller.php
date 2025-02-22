<?php
require_once '../models/ExchangeRate.php';

class ExchangeRateController
{

    private $exchangeRate;

    public function __construct()
    {
        $this->exchangeRate = new ExchangeRate();
    }

    public function getRatee($from, $to)
    {
        $exchangeRate = new ExchangeRate();
        $rate = $exchangeRate->getRate($from, $to);
        return $rate;
    }
}
