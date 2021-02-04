<?php

namespace Computer;

class Desktop extends AbstractComputer
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
     * @return array
     */
    public function jsonSerialize(): array
    {
        $array = parent::jsonSerialize();
        return $array;
    }
}
