<?php

namespace Device;

class Keyboard extends AbstractDevice
{
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
        $array["format"] = $this->format;
        return $array;
    }
}
