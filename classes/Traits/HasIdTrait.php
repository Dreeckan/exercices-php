<?php

namespace Traits;

trait HasIdTrait
{
    /** @var string */
    protected $id;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id)
    {
        $this->id = $id;

        return $this;
    }
}