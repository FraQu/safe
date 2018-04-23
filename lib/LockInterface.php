<?php
interface LockInterface {
    function getPin();
    function setPin($pin);
    function setLocked($pin);
    function unlock($pin);
}