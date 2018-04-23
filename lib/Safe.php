<?php
require_once 'SafeInterface.php';

class Safe implements SafeInterface {
    protected $locked = true;
    protected $content = 'This is secret. This safe has a bad design.';

    public $producer = 'AK Solutions';
    public $model = 'OOP Safe I';


    public function getProducer() {
        return $this->producer;
    }

    public function setProducer($producer) {
        $this->producer = $producer;
    }
}