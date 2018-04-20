<?php
require 'Safe.php';

class Lock extends Safe {
    protected $pin;

    private $locked = true;


    public function getPin() {
        return $this->pin;
    }

    public function setPin($pin) {
        $this->pin = $pin;
    }

    public function isLocked() {
        return $this->locked;
    }

    public function setLocked($locked) {
        $this->locked = $locked;
    }

    public function unlock($pin) {
        if($this->getPin() == $pin) {
            $this->locked = false;
            return true;
        }
        return false;
    }

    public function lock() {
        $this->setLocked(true);
    }
}