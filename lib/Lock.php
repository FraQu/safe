<?php
require_once 'LockAbstract.php';

class Lock extends LockAbstract {

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