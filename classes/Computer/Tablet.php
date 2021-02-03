<?php

namespace Computer;

class Tablet extends AbstractComputer
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
