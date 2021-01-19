<?php
    namespace Component;

class AbstractComponent
{

    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $brand;


    public function getName()
    {
        return $this->name;
    }
    public function getBrand()
    {
        return $this->brand;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
}
