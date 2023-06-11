<?php
//cara melakukan import group ada;ah dengan {}

require_once 'data/conflict.php';
require_once 'data/helper.php';

use Data\One\{Conflict as conflict1, Sample, Dummy};
use Data\Two\Conflict as Conflict2;
use function Helper\HelpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();
