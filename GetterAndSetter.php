<?php

require_once "data/Category.php";

$category = new Category();
$category->setName("HandPhone");
$category->setExpensive(true);

echo $category->getName() . PHP_EOL;
echo $category->isExpensive() . PHP_EOL;
