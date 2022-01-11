<?php

namespace Amaur\App\entity;

class Assets {
    private ?int $id;
    private ?string $content;
    private ?Civilization $civilizationFk;

    /**
     * @param int|null $id
     * @param string|null $content
     * @param Civilization|null $civilizationFk
     */
    public function __construct(int $id = null, string $content = null, Civilization $civilizationFk = null)
    {
        $this->id = $id;
        $this->content = $content;
        $this->civilizationFk = $civilizationFk;
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
     * @return Assets
     */
    public function setId(?int $id): Assets
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string|null $content
     * @return Assets
     */
    public function setContent(?string $content): Assets
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return Civilization|null
     */
    public function getCivilizationFk(): ?Civilization
    {
        return $this->civilizationFk;
    }

    /**
     * @param Civilization|null $civilizationFk
     * @return Assets
     */
    public function setCivilizationFk(?Civilization $civilizationFk): Assets
    {
        $this->civilizationFk = $civilizationFk;
        return $this;
    }
}