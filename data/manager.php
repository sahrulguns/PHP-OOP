<?php

class Manager
{
     var string $name;
     var string $title;

     public function __construct($name = "perul", $title = "learn")
     {
          $this->name = $name;
          $this->title = $title;
     }

     function sayHello(string $name, string $title = "mantap"): void
     {
          echo "Hi $name, my name is $this->name";
          echo "Tema learn this now is $this->title";
     }
}


class VicePresindent extends manager
{
     // function overriding adalah menimpa atau membuat kembali funvtion tersebut didalam sub classnya

     // kita juga bisa melakukan override terhadap sebuah constructor

     public function __constructor(string $name)
     {
          parent::__construct($name = "VP");
     }

     function sayHello(string $name, string $title = "mantap"): void
     {
          echo "Hi $name, my name is VP $this->name";
     }
}
