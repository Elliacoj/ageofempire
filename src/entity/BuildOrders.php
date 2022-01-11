<?php

namespace Amaur\App\entity;

class BuildOrders {
    private ?int $id;
    private ?string $name;
    private ?string $dark;
    private ?string $feudal;
    private ?string $castle;
    private ?string $imperial;
    private ?string $link;
    private ?string $source;
    private ?Civilization $civilizationFk;

    /**
     * @param int|null $id
     * @param string|null $name
     * @param string|null $dark
     * @param string|null $feudal
     * @param string|null $castle
     * @param string|null $imperial
     * @param string|null $link
     * @param string|null $source
     */
    public function __construct(int $id = null, string $name = null, string $dark = null, string $feudal = null, string $castle = null,
                                string $imperial = null, string $link = null, string $source = null, Civilization $civilizationFk = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->dark = $dark;
        $this->feudal = $feudal;
        $this->castle = $castle;
        $this->imperial = $imperial;
        $this->link = $link;
        $this->source = $source;
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
     * @return BuildOrders
     */
    public function setId(?int $id): BuildOrders
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
     * @return BuildOrders
     */
    public function setName(?string $name): BuildOrders
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDark(): ?string
    {
        return $this->dark;
    }

    /**
     * @param string|null $dark
     * @return BuildOrders
     */
    public function setDark(?string $dark): BuildOrders
    {
        $this->dark = $dark;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeudal(): ?string
    {
        return $this->feudal;
    }

    /**
     * @param string|null $feudal
     * @return BuildOrders
     */
    public function setFeudal(?string $feudal): BuildOrders
    {
        $this->feudal = $feudal;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCastle(): ?string
    {
        return $this->castle;
    }

    /**
     * @param string|null $castle
     * @return BuildOrders
     */
    public function setCastle(?string $castle): BuildOrders
    {
        $this->castle = $castle;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getImperial(): ?string
    {
        return $this->imperial;
    }

    /**
     * @param string|null $imperial
     * @return BuildOrders
     */
    public function setImperial(?string $imperial): BuildOrders
    {
        $this->imperial = $imperial;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * @param string|null $link
     * @return BuildOrders
     */
    public function setLink(?string $link): BuildOrders
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string|null $source
     * @return BuildOrders
     */
    public function setSource(?string $source): BuildOrders
    {
        $this->source = $source;
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
     * @return BuildOrders
     */
    public function setCivilizationFk(?Civilization $civilizationFk): BuildOrders
    {
        $this->civilizationFk = $civilizationFk;
        return $this;
    }
}