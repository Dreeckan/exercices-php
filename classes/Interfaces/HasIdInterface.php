<?php

namespace Interfaces;

interface HasIdInterface
{
    public function getId(): int;
    public function setId(int $id): HasIdInterface;
    //retourne n'importe quel objet qui implemente HasIdInterface
}
