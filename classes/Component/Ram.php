<?php
namespace Component;

class Ram extends AbstractComponent
{
    
    /**
     * @var int
     */

    public $size = 0;

    public function getSize(): int
    {
        return $this->size;
    }
    public function setSize(int $size)
    {
        $this->size = $size;
        return $this;
    }
    public function jsonSerialize()
    {
        parent::jsonSerialize();

        return [
            'Ram' => [
                'name' => $this->name,
                'brand' => $this->brand,
                'size' => $this->size
            ]
        ];
    }
}
