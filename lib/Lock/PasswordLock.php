<?php
class PasswordLock extends LockAbstract {
    private $password;

    public function __construct($password = null) {
        $this->password = $password;
        //LockAbstract's constructor
        parent::__construct();
    }

    public function getPassword() {
        return $this->password;
    }

    public function setUnlocked($pin, $password) {
        if($this->getPassword() == $password) {
            $this->locked = false;
            return true;
        }
        return false;
    }
}