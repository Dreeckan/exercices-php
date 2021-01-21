<?php
namespace Device;

class Keyboard extends AbstractDevice
{
    
    /**
     * @var string|nul
     */

    public $format = '';

    public function getFormat(): string
    {
        return $this->format;
    }
    public function setFormat(string $format)
    {
        $this->format = $format;
        return $this;
    }
    public function jsonSerialize()
    {
        $array = parent::jsonSerialize();
        $array['format'] = $this->format;
        return ['Keyboard'=> $array];
    }
}
