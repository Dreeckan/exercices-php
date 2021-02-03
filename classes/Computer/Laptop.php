<?php

namespace Computer;

class Laptop extends AbstractComputer
{
    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $array = parent::jsonSerialize();
        $array["type"] = self::class;
        return $array;
    }
}
