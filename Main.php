<?php
require 'MySafe.php';

$lock = new Lock();
$mySafe = new MySafe();
$safe = new Safe();

$safeModel = $mySafe->model;
$producer = $mySafe->getProducer();

$mySafe->unlock($_POST['pin']);
if($mySafe->isLocked() == false) {
    echo "Safe unlocked. <br />";
    echo "Welcome to $safeModel by $producer <br />";
    echo $mySafe->getContent();
    $mySafe->lock();
}
else if($mySafe->isLocked() == true) {
    echo "Error. Wrong PIN number. <br /> Safe still locked. <br /><br />";
    /*?>
    <iframe src="index.php" style="border:none;"></iframe> <?php if($mySafe->isLocked() == true) {
    }
    */
    include 'index.php';
}

