<?php
require_once 'AlarmInterface.php';
require_once 'Safe.php';

class Alarm extends Safe implements AlarmInterface {
    public $alarm = true;

    public function __construct($alarm){
        $this->alarm = $alarm;
    }

    public function setAlarmOn() {
        $this->alarm = true;
    }

    public function setAlarmOff() {
        $this->alarm = false;
    }

    public function getAlarmState() {
        return $this->alarm;
    }
}