<?php
namespace Devices;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use Traits\HasNameTrait;

class AbstractDevice implements HasNameInterface, HasBrandInterface
{
    /**
   * @var string
   */
    protected $brand;

    public function __construct(
        $name = '',
        $brand = ''
    ) {
        $this->name = $name;
        $this->brand = $brand;
    }
    
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand($brand): HasBrandInterface
    {
        $this->brand = $brand;
        return $this;
    }
    use HasNameTrait;
}
