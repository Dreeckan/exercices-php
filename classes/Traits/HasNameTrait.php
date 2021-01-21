<?php

namespace Traits;

use interfaces\HasNameInterface;

trait HasNameTrait
{
    /**
     * @var string
     */
    protected $name = "";
    /**
     * Get the value of name
     *
     * @return  string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */
    public function setName(?string $name): HasNameInterface
    {
        $this->name = $name;

        return $this;
    }
}
