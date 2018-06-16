<?php
spl_autoload_register(function ($class_name) {
    include 'lib/' . $class_name . '.php';
});

$pinLock = new PinLock('1234');
$passLock = new PasswordLock('qwerty');
$safe = new Safe(/*$pinLock, */$passLock);

$safeModel = $safe->model;
$producer = $safe->getProducer();

echo "Check alarm on or off before checking the PIN/PASS: ";
echo var_dump(Alarm::getAlarmState()) . "<hr /><br />";

$pinLock->setUnlocked($_POST['pin/pass'],$_POST['pin/pass']);
$passLock->setUnlocked($_POST['pin/pass'],$_POST['pin/pass']);

if (($pinLock->getLockState() == false) || ($passLock->getLockState() == false)) {
    Alarm::setAlarmOff();
    echo "Safe unlocked: <br />";
    echo "Alarm state: ";
    echo var_dump(Alarm::getAlarmState()) . "<br />";
    echo "Welcome to $safeModel by $producer <br /><hr />";
    echo $safe->getContent();
    $pinLock->setLocked(true);
} else if (($pinLock->getLockState() == true) || ($passLock->getLockState() == true)){
    Alarm::setAlarmOn();
    echo "Alarm state: ";
    echo var_dump(Alarm::getAlarmState()) . "<br />";
    echo "Error. Wrong PIN number or PASSWORD. <br /> Safe still locked. <br /><hr />";
    require_once 'index.php';
}