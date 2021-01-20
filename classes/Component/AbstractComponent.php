<?php 
namespace Component;

use Interfaces\HasNameInterface;
use Traits\HasBrandTrait;
use Traits\HasNameTrait;
use Interfaces\HasBrandInterface;

abstract class AbstractComponent implements HasNameInterface, HasBrandInterface {

   use HasNameTrait;
   use HasBrandTrait;

//     /**
//      * Get the value of brand
//      *
//      * @return  string
//      */ 
//     public function getBrand()
//     {
//         return $this->brand;
//     }

//     /**
//      * Set the value of brand
//      *
//      * @param  string  $brand
//      *
//      * @return  self
//      */ 
//     public function setBrand(string $brand)
//     {
//         $this->brand = $brand;

//         return $this;
//     }
}