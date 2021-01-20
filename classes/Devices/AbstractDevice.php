<?php
namespace Devices;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;

class AbstractDevice implements HasNameInterface, HasBrandInterface
{
    /**
   * @var string
   */
    protected $name;
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
    //les getters
    public function getName(): ?string
    {
        return  $this->name;
    }
    public function getBrand(): ?string
    {
        return $this->brand;
    }
    //les setters
    public function setName(?string $name): HasNameInterface
    {
        $this->name = $name;

        return $this;
    }

    public function setBrand($brand): HasBrandInterface
    {
        $this->brand = $brand;
        return $this;
    }
}
