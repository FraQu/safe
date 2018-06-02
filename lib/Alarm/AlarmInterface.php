<?php
interface AlarmInterface {
    static public function setAlarmOn();
    static public function setAlarmOff();
    static public function getAlarmState();
}