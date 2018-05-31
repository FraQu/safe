<?php
abstract class SafeAbstract {
    public $producer;
    protected $content;
    public $model;

    public function __construct($content = 'This is secret. This safe has a bad design.',
                                $producer = 'AK Solutions',
                                $model = 'OOP Safe II') {
        $this->content = $content;
        $this->producer = $producer;
        $this->model = $model;
    }

    abstract public function getContent();
    abstract public function setContent($content);

    public function getProducer() {
        return $this->producer;
    }

    public function setProducer($producer) {
        $this->producer = $producer;
    }
}