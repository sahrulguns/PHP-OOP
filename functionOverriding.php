<?php
require_once 'data/manager.php';

$manager = new Manager();
$manager->sayHello("Joko") . PHP_EOL;

$vp = new VicePresindent();
$vp->name = "popo";
$vp->sayHello("sasa") . PHP_EOL;
