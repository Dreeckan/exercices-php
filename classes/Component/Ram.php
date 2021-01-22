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
    /**
     * @return array
     */

    public function jsonSerialize():array
    {
        $array = parent::jsonSerialize();
        $array['size'] = $this->size;
        return ['Ram'=> $array];
    }
}
