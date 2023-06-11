<?php
// alias adalah membuat kemampuan nama lain dari class,function atau constam yang ada

require_once 'data/conflict.php';
require_once 'data/helper.php';

use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\HelpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();
