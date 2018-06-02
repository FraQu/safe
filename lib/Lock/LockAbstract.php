<?php
abstract class LockAbstract {
    protected $locked = true;


    abstract public function setUnlocked($pin, $password);

    public function __construct($locked = true) {
        $this->locked = $locked;
    }

    public function setLocked($locked) {
        $this->locked = $locked;
    }

    public function getLockState() {
        return $this->locked;
    }
}