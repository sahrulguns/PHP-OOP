<?php
// saat kita membuat aplikasi, bisa dipastikan kita akan banyak membuat class,
// jika class terlalu banyak,kadang akan menyulitka kita untuk mencari atau mengklasifikasikan jenis-jenis class
// php memiliki fitur namespace,dimana kita bisa menyimpan class didala, namespace
// namespace bisa nested, dan jika kita ingin mengakses class terdapat di namespace kita perlu menybutkan nama namespacenya
// nama class sama tidak akan menjadi error di php

require_once 'data/conflict.php';
require_once 'data/Helper.php';

// membuat ocject di namespace
$conflict1 = new \Data\One\Conflict();

// mengakses constan 
echo Helper\APPLICATION;


// gloval namespace
// adalah namespace yang tidak memiliki nama namespace