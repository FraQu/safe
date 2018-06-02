<?php
interface LockInterface {
    public function getPin();
    public function setPin($pin);
    public function setLocked($pin);
    public function setUnlocked($pin);
}