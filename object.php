<?php

require_once 'data/person.php';



// membuat sebuah object
$person = new Person("sahrul", 'pekanbaru');





// manipulasi object
$person->name = "sahrul";
$person->address = "jl.h.agussalim";
$person->country = "indonesia";

$person->sayHello('sahrul');

var_dump($person);
