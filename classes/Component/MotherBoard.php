<?php

namespace Component;

class MotherBoard extends AbstractComponent
{
    /** @var string|null  */
    protected $chipset = null;

    /**
     * @return string|null
     */
    public function getChipset(): ?string
    {
        return $this->chipset;
    }

    /**
     * @param string|null $chipset
     *
     * @return MotherBoard
     */
    public function setChipset(?string $chipset): MotherBoard
    {
        $this->chipset = $chipset;

        return $this;
    }

    public function getTableName(): string
    {
        return 'motherboard';
    }

    public function getSpecificFields(): array
    {
        return [
            'chipset' => '"'.$this->getChipset().'"',
        ];
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $ret = parent::jsonSerialize();
        $ret['chipset'] = $this->getChipset();

        return $ret;
    }
}