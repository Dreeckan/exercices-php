<?php

namespace Interfaces;

use Computer;

interface ValidatorInterface
{
    public function validate(Computer $computer): bool;
}