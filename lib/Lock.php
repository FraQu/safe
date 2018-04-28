<?php
require_once 'LockInterface.php';
require_once 'Safe.php';

class Lock extends Safe implements LockInterface {
    protected $pin;

    public function __construct($pin) {
        $this->pin = $pin;
    }


    public function isLocked() {
        return $this->locked;
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
        return true;
    }

    public function getPin() {
        return $this->pin;
    }

    public function setUnlocked($pin) {
        if($this->getPin() == $pin) {
            $this->locked = false;
            return true;
        }
        return false;
    }

    public function setPin($pin) {
        $this->pin = $pin;
    }

    public function setLocked($locked) {
        $this->locked = $locked;
    }
}