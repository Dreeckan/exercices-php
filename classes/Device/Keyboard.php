<?php

namespace Device;

class Keyboard extends AbstractDevice
{

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

    /**
     * @var string
     */
    protected $format;

    /**
     * @param string $format
     *
     * @return $this
     */

    public function setFormat(string $format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $array = parent::jsonSerialize();
        $array["format"] = $this->getFormat();
        return $array;
    }
}
