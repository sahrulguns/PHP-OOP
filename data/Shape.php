<?php

namespace Data;


class Shape
{
     public function getCorner()
     {
          return 0;
     }
}

class Rectangle extends Shape
{
     public function getCorner()
     {
          return 4;
     }

     // untuk mengakses function getCorner() parent kembali kita bisa melakukannya sebagai berikut
     public function getParentCorner()
     {
          return parent::getCorner();
     }
}
