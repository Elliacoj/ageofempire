<?php

namespace Amaur\App\entity;

class Categories {
    private ?int $id;
    private ?string $name;

    /**
     * @param int|null $id
     * @param string|null $name
     */
    public function __construct(int $id = null, string $name= null)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return Categories
     */
    public function setId(?int $id): Categories
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return Categories
     */
    public function setName(?string $name): Categories
    {
        $this->name = $name;
        return $this;
    }
}