<?php
namespace Devices;

class Keyboard extends AbstractDevice
{
    //les setters
    public function setKeyboardName($name)
    {
        $this->name = $name;
    }
}
