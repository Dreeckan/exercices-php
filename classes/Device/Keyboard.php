<?php
namespace Device;

class Keyboard extends AbstractDevice
{
    protected $format;

    public function getFormat()
    {
        return $this->format;
    }
    public function setFormat($f1)
    {
        $this->format = $f1;
    }
    public function jsonSerialize()
    {
        $return = parent::jsonSerialize();
        $return['Format'] = $this->getFormat();
        return $return;
    }
    /**
     * @var string
     */
    protected $type = self::class;

    
    /**
     * Get the value of type
     *
     * @return  string
     */
    public function getType()
    {
        return $this->type;
    }
    public function setType($s)
    {
        $this->type = $s;
        return $this;
    }
}
