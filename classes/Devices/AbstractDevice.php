<?php
namespace Devices;

class AbstractDevice
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
    public function getName()
    {
        return  $this->name;
    }
    public function getBrand()
    {
        return $this->brand;
    }
    //les setters
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
}
