<?php
require_once 'Safe.php';
abstract class LockAbstract extends Safe {
    protected $pin = '1234';
    protected $locked = true;

    abstract protected function getPin();
    abstract protected function setPin($pin);
    abstract protected function setLocked($pin);
    abstract protected function unlock($pin);

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
    }

    public function lock() {
        $this->setLocked(true);
    }
}