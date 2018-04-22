<?php
abstract class SafeAbstract {
    public $model = 'OOP Safe I';
    protected $producer = 'AK Solutions';

    abstract public function getProducer();
    abstract public function setProducer($producer);
}