<?php
class PinLock extends LockAbstract {
    private $pin;

    public function __construct($pin = null) {
        $this->pin = $pin;
        //LockAbstract's constructor
        parent::__construct();
    }

    public function getPin() {
        return $this->pin;
    }

    public function setUnlocked($pin, $password) {
        if($this->getPin() == $pin) {
            $this->locked = false;
            return true;
        }
        return false;
    }
}