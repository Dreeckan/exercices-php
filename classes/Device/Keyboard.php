<?php

namespace Device;

use Traits\HasTypeTrait;

class Keyboard extends AbstractDevice
{
    use HasTypeTrait;

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
