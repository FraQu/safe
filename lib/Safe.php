<?php
require_once 'SafeInterface.php';

class Safe implements SafeInterface {
    public $model = 'OOP Safe I';
    protected $producer = 'AK Solutions';


    public function getProducer() {
        return $this->producer;
    }

    public function setProducer($producer) {
        $this->producer = $producer;
    }
}