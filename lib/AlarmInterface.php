<?php
interface AlarmInterface {
    public function setAlarmOn();
    public function setAlarmOff();
    public function getAlarmState();
}