<?php
namespace Component;

class MotherBoard extends AbstractComponent
{
    //[ ] Ajouter l'attribut `$chipset` (string|null) à la class `MotherBoard`, avec son getter
    /**
     * @var string
     */

    public $chipset = '';

    public function getChipset(): string
    {
        return $this->chipset;
    }
    public function setChipset(string $chipset)
    {
        $this->chipset = $chipset;
        return $this;
    }
    public function jsonSerialize()
    {
        parent::jsonSerialize();

        return [
            'MotherBoard' => [
                'name' => $this->name,
                'brand' => $this->brand,
                'chipset' => $this->chipset
            ]
        ];
    }
}
