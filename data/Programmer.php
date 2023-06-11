<?php

class Programmer
{
     var string $name;

     public function __construct(string $name)
     {
          $this->name = $name;
     }
}

class BackendProgrammer extends Programmer
{
}

class FrontEndProgrammer extends Programmer
{
}

// melakukan polymorphism

class Company
{
     public Programmer $programmer;
}
