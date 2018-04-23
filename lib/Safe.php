<?php
require_once 'SafeAbstract.php';

class Safe extends SafeAbstract {
    protected $content = 'This is secret. This safe has a bad design.';


    public function getProducer() {
        return $this->producer;
    }

    public function setProducer($producer) {
        $this->producer = $producer;
    }
}