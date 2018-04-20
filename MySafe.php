<?php
require 'Lock.php';

class MySafe extends Lock {
    protected $pin = '1234';
    protected $content ='';
}