<?php

namespace Interfaces;

use Computer\Computer;

interface ValidatorInterface
{
    public function validate(Computer $computer): bool;
}
