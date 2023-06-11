<?php
class Person
{
     // membuat constant

     const AUTHOR = "SAHRUL GUNAWAN";

     // untuk melakukan properties type declaration bisa langsung 
     var string $name; // ini adalah sebuah properties
     var string $address;
     var string $country;

     // menambahkan construktor
     function __construct(string $name, ?string $address)
     {
          $this->name = $name;
          $this->address = $address;
     }

     function sayHello(?string $name)
     {
          if (is_null($name)) {
               echo "Hi, my name is, $this->name";
          } else {
               echo "Hi $name. my namw is $this->name";
          }
     }

     // cara mengakses constant didalam local scope
     function info()
     {
          // echo "Author : " . Person::AUTHOR;
          // dan jika ingin mengakses pada class yang sama bisa menggunakan self
          echo "Author : " . self::AUTHOR;
     }

     // mmebuat penghancur/penghapus dari constructor
     // destructor berfungsi menghapus obejct di dalam memory
     // dalam penggunaan nya untuk mengahpus koneksi ke database atau menutup proses memilih ke file. sehingga tidak terjadi mrmory leas

     function __destruct()
     {
          echo " Object person {$this->name} is destroyed";
     }
}
