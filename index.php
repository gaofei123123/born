<?php

require 'vendor/autoload.php';

use Movie\China\Terror;
use Movie\Japan\Action;
use Movie\Korea\Horrible;
use Movie\Us\Saw;

$test1 = (new Terror())->show();
$test2 = (new Action())->show();
$test3 = (new Horrible())->show();
$test4 = (new Saw())->show();