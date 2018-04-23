<?php
require_once 'LockInterface.php';
require_once 'Safe.php';

class Lock implements LockInterface {
    protected $locked = true;
    protected $pin = '1234';
    protected $content = 'This is secret. This safe has a bad design.';
    protected $lockIt;


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

    public function unlock($pin) {
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