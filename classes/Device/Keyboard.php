<?php

namespace Device;

class Keyboard extends AbstractDevice
{
    /** @var string */
    protected $format = 'AZERTY';

    /**
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }

    /**
     * @param string $format
     *
     * @return Keyboard
     */
    public function setFormat(string $format): Keyboard
    {
        $this->format = $format;

        return $this;
    }

    public function getTableName(): string
    {
        return 'keyboard';
    }

    public function getSpecificFields(): array
    {
        return [
            'format' => '"'.$this->getFormat().'"',
        ];
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $ret = parent::jsonSerialize();
        $ret['format'] = $this->getFormat();

        return $ret;
    }
}