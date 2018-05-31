<?php
class Safe extends SafeAbstract {
    protected $lock;

    public function __construct(LockAbstract $locked) {
        $this->lock = $locked;
        //SafeAbstract's constructor
        parent::__construct();
    }

    public function getContent() {
        if($this->lock->getLockState() == true) {
            return false;
        }
        return $this->content;
    }

    public function setContent($content) {
        if($this->lock->getLockState() == true) {
            return false;
        }
        $this->content = $content;
        return true;
    }
}