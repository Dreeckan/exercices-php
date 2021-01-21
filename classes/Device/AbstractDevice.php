<?php 
namespace Device;

use interfaces\HasBrandInterface;
use interfaces\HasNameInterface;
use JsonSerializable;
use Traits\HasNameTrait;
use Traits\HasBrandTrait;

abstract class AbstractDevice implements HasBrandInterface, HasNameInterface, JsonSerializable  {
 use HasNameTrait; 
 use HasBrandTrait;
    // /**
    //  * @var string
    //  */
    // protected $name;

    // /**
    //  *  @var string
    //  */
    // protected $brand;

    /**
     * Get the value of name
     *
  * @return  string
      */ 
    // public function getName(): ?string
    // {
    //     return $this->name;
    // }

    // /**
    //  * Set the value of name
    //  *
    // //  * @param  string  $name
    //  *
    //  * @return  self
    //  */ 
    // public function setName(?string $name): HasNameInterface
    // {
    //     $this->name = $name;

    //     return $this;
    // }

    // /**
    //  * Get the value of brand
    //  *
    //  * @return  string
    //  */ 
    // public function getBrand(): ?string
    // {
    //     return $this->brand;
    // }

    // /**
    //  * Set the value of brand
    //  *
    //  * @param  string  $brand
    //  *
    //  * @return  self
    //  */ 
    // public function setBrand(?string $brand): HasBrandInterface
    // {
    //     $this->brand = $brand;

    //     return $this;
    // }
    public function jsonSerialize() 
    {
        return [
        "Jbrand"=> $this->brand,
        "Jname" => $this->name,
        ];
        
    }
}