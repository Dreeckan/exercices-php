<?php

namespace interfaces;
use Computer;


interface ValidatorInterface
{
   public function validate(Computer $computer): bool;
}