<?php
require_once 'lib/Lock.php';
require_once 'lib/Lock2.php';
require_once 'lib/Safe.php';

$safe = new Safe();
$lock = new Lock();
$lock2 = new Lock2();
$safeModel = $safe->model;
$producer = $safe->getProducer();


$lock->unlock($_POST['pin']);
$lock2->unlock($_POST['pin']);
if($lock->isLocked() == false || $lock2->isLocked() == false) {
    echo "Safe unlocked. <br />";
    echo "Welcome to $safeModel by $producer <br /><hr />";
    echo $lock->getContent();
    echo $lock2->getContent();

    //Test: Safe unlocked by which Lock
    if($lock->isLocked() == false) {
        echo "<br />Safe unlocked by Lock: yes";
    } else {
        echo "<br />Safe unlocked by Lock: no";
    }
    if($lock2->isLocked() == false) {
        echo "<br />Safe unlocked by Lock: yes";
    } else {
        echo "<br />Safe unlocked by Lock: no";
    }

    $lock->setLocked(true);
    $lock2->setLocked(true);
}
else if ($lock->isLocked() == true || $lock2->isLocked() == true) {
    echo "Error. Wrong PIN number. <br /> Safe still locked. <br /><hr />";
    require_once 'index.php';
}