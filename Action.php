<?php
require_once 'lib/Alarm.php';
require_once 'lib/Lock.php';
require_once 'lib/Lock2.php';
require_once 'lib/Safe.php';

$alarm = new Alarm(true);
$lock = new Lock('2345');
$lock2 = new Lock2('qwerty');
$safe = new Safe();
$safeModel = $safe->model;
$producer = $safe->getProducer();


//echo "Check alarm on or off before checking the PIN/PASS <br />" . var_dump($alarm->getAlarmState());

$lock->setUnlocked($_POST['pin']);
$lock2->setUnlocked($_POST['pin']);

if ($lock->isLocked() == false) {
    $alarm->setAlarmOff();
//    var_dump($alarm->getAlarmState());
    echo "Safe unlocked. <br />";
    echo "Welcome to $safeModel by $producer <br /><hr />";
    echo $lock->getContent();
    $lock->setLocked(true);
} else if ($lock2->isLocked() == false) {
    $alarm->setAlarmOff();
//    var_dump($alarm->getAlarmState());
    echo "Safe unlocked. <br />";
    echo "Welcome to $safeModel by $producer <br /><hr />";
    echo $lock2->getContent();
    $lock2->setLocked(true);
} else if ($lock->isLocked() == true) {
    $alarm->setAlarmOn();
//    var_dump($alarm->getAlarmState());
    echo "Error. Wrong PIN number or PASSWORD. <br /> Safe still locked. <br /><hr />";
    require_once 'index.php';
} else if ($lock2->isLocked() == true) {
    $alarm->setAlarmOn();
//    var_dump($alarm->getAlarmState());
    echo "Error. Wrong PIN number or PASSWORD. <br /> Safe still locked. <br /><hr />";
    include_once 'index.php';
}