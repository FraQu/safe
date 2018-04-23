<?php
require_once 'SafeInterface.php';

class Safe implements SafeInterface {
    protected $locked = true;
    public $model = 'OOP Safe I';
    protected $producer = 'AK Solutions';
    protected $content = 'This is secret. This safe has a bad design.';


    public function getProducer() {
        return $this->producer;
    }

    public function setProducer($producer) {
        $this->producer = $producer;
    }
}