<?php

namespace Amaur\App\entity;

class Information {
    private ?int $id;
    private ?Civilization $civilization;
    private ?string $description;

    /**
     * @param int|null $id
     * @param Civilization|null $civilization
     * @param string|null $description
     */
    public function __construct(int $id = null, Civilization $civilization = null, string $description = null)
    {
        $this->id = $id;
        $this->civilization = $civilization;
        $this->description = $description;
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
     * @return Information
     */
    public function setId(?int $id): Information
    {
        $this->id = $id;
        return $this;

    }

    /**
     * @return Civilization|null
     */
    public function getCivilization(): ?Civilization
    {
        return $this->civilization;
    }

    /**
     * @param Civilization|null $civilization
     * @return Information
     */
    public function setCivilization(?Civilization $civilization): Information
    {
        $this->civilization = $civilization;
        return $this;

    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return Information
     */
    public function setDescription(?string $description): Information
    {
        $this->description = $description;
        return $this;
    }
}