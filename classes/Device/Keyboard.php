<?php

namespace Device;

class Keyboard extends AbstractDevice
{
    /** @var string */
    protected $format = 'AZERTY';

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param string $format
     *
     * @return Keyboard
     */
    public function setFormat(string $format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $array = parent::jsonSerialize();
        $array['format'] = $this->getFormat();

        return $array;
    }
}
