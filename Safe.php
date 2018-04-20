<?php

class Safe {
    public $model = 'OOP Safe I';

    protected $content;

    private $producer = 'AK Solutions';


    public function getProducer() {
        return $this->producer;
    }
    public function setProducer($producer) {
        $this->producer = $producer;
    }
    public function getContent() {
        if($this->isLocked() == true) {
            return false;
        }
        return $this->content;
    }
    public function setContent($content) {
        if($this->isLocked() == true) {
            return false;
        }
        $this->content = $content;
    }
}