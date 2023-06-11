<?php

require_once "data/conflict.php";
require_once "data/helper.php";

// caraw menggunakan use keyword
use Data\One\Conflict;
use function Helper\HelpMe;
use const Helper\APPLICATION;


$conflict1 = new Conflict();
$conflict2 = new Data\Two\Conflict(); //ini bisa digunakan jika tidak menggunakan alias

// mengakses funvtion
HelpMe();

// mengakses constan
echo APPLICATION;
