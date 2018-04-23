<?php
require_once 'lib/Lock.php';

$safe = new Safe();
$lock = new Lock();

$safeModel = $safe->model;
$producer = $safe->getProducer();

$lock->unlock($_POST['pin']);
if($lock->isLocked() == false) {
    echo "Safe unlocked. <br />";
    echo "Welcome to $safeModel by $producer <br />";
    echo $lock->getContent();
    $lock->lock();
}
else if($lock->isLocked() == true) {
    echo "Error. Wrong PIN number. <br /> Safe still locked. <br /><hr>";
    require_once 'index.php';
}

