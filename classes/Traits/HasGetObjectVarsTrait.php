<?php

namespace Traits;

trait HasGetObjectVarsTrait
{
    public function getObjectVars()
    {
        return get_object_vars($this);
    }
}
