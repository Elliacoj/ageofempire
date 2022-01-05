<?php

namespace Amaur\App\entity;

class Civilization {
    private ?int $id;
    private ?string $name;
    private ?string $abbreviation;
    private ?string $flag;

    /**
     * @param int|null $id
     * @param string|null $name
     * @param string|null $abbreviation
     * @param string|null $flag
     */
    public function __construct(int $id = null, string $name = null, string $abbreviation = null, string $flag = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->abbreviation = $abbreviation;
        $this->flag = $flag;
    }

    /**
     * return the id of Civilization
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the id of Civilization
     * @param int|null $id
     * @return Civilization
     */
    public function setId(?int $id): Civilization
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Return the name of Civilization
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set the name of Civilization
     * @param string|null $name
     * @return Civilization
     */
    public function setName(?string $name): Civilization
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Return the abbreviation of Civilization
     * @return string|null
     */
    public function getAbbreviation(): ?string
    {
        return $this->abbreviation;
    }

    /**
     * Set the abbreviation of Civilization
     * @param string|null $abbreviation
     * @return Civilization
     */
    public function setAbbreviation(?string $abbreviation): Civilization
    {
        $this->abbreviation = $abbreviation;
        return $this;
    }

    /**
     * Return the flag of Civilization
     * @return string|null
     */
    public function getFlag(): ?string
    {
        return $this->flag;
    }

    /**
     * Set the flag of Civilization
     * @param string|null $flag
     * @return Civilization
     */
    public function setFlag(?string $flag): Civilization
    {
        $this->flag = $flag;
        return $this;
    }
}