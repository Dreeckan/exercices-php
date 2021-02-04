<?php

namespace Interfaces;

interface JsonSerializable
{
    public function jsonSerialize(): array;
}
