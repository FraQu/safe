<?php
require_once 'AlarmAbstract.php';

class Alarm extends AlarmAbstract {
    public static function setAlarmOn() {
        self::$alarm = true;
    }

    public static function setAlarmOff() {
        self::$alarm = false;
    }

    public static function getAlarmState() {
        return self::$alarm;
    }
}