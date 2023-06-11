<?php
require_once 'data/manager.php';

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello('Joko');


echo "<br>";
$vp = new VicePresindent();
$vp->name = "Sahrul";
$vp->sayHello('perul');
