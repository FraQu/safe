<?php
require_once 'lib/Lock.php';
require_once 'lib/Lock2.php';
require_once 'lib/Safe.php';

$safe = new Safe();
$lock = new Lock('2345');
$lock2 = new Lock2('qwerty');
$safeModel = $safe->model;
$producer = $safe->getProducer();


$lock->setUnlocked($_POST['pin']);
$lock2->setUnlocked($_POST['pin']);
if($lock->isLocked() == false) {
    echo "Safe unlocked. <br />";
    echo "Welcome to $safeModel by $producer <br /><hr />";
    echo $lock->getContent();
    $lock->setLocked(true);
}
else if($lock2->isLocked() == false) {
    echo "Safe unlocked. <br />";
    echo "Welcome to $safeModel by $producer <br /><hr />";
    echo $lock2->getContent();
    $lock2->setLocked(true);
}
else if($lock->isLocked() == true) {
    echo "Error. Wrong PIN number or PASSWORD. <br /> Safe still locked. <br /><hr />";
    require_once 'index.php';
}
else if($lock2->isLocked() == true) {
    echo "Error. Wrong PIN number or PASSWORD. <br /> Safe still locked. <br /><hr />";
    require_once 'index.php';
}

