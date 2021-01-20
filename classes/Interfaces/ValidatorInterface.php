<?php

namespace Interfaces;

use Computer\AbstractComputer;

interface ValidatorInterface
{
    public function validate(AbstractComputer $computer): bool;
}
