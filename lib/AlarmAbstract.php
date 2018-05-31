<?php
require_once 'AlarmInterface.php';

abstract class AlarmAbstract implements AlarmInterface {
    static $alarm = true;

    abstract static public function setAlarmOn();
    abstract static public function setAlarmOff();
    abstract static public function getAlarmState();
}