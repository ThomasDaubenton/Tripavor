<?php

namespace App\Entity\trip;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Index;

/**
 * @ORM\Table(name="country", indexes={@Index(name="search_idx", columns={"alpha2", "alpha3"})})
 * @ORM\Entity(repositoryClass="App\Repository\trip\PaysRepository")
 */
class Country
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="code", type="integer")
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="alpha2", type="string", length=2)
     */
    private $alpha2;

    /**
     * @var string
     *
     * @ORM\Column(name="alpha3", type="string", length=3)
     */
    private $alpha3;

    /**
     * @var string
     *
     * @ORM\Column(name="namegb", type="string")
     */
    private $nameGb;

    /**
     * @var string
     *
     * @ORM\Column(name="namefr", type="string")
     */
    private $nameFr;

    /* GETTERS AND SETTERS */
    /**
     * Set id
     *
     * @param integer $id
     * @return Country
     */
    public function setId(int $id): Country
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param integer $code
     * @return Country
     */
    public function setCode(int $code): Country
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return integer
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * Set alpha2
     *
     * @param string $alpha2
     * @return Country
     */
    public function setAlpha2(string $alpha2): Country
    {
        $this->alpha2 = $alpha2;

        return $this;
    }

    /**
     * Get alpha2
     *
     * @return string
     */
    public function getAlpha2():string
    {
        return $this->alpha2;
    }

    /**
     * Set alpha3
     *
     * @param string $alpha3
     * @return Country
     */
    public function setAlpha3(string $alpha3): Country
    {
        $this->alpha3 = $alpha3;

        return $this;
    }

    /**
     * Get alpha3
     *
     * @return string
     */
    public function getAlpha3(): string
    {
        return $this->alpha3;
    }

    /**
     * Set nameGb
     *
     * @param string $name
     * @return Country
     */
    public function setNomGb($name): Country
    {
        $this->nameGb = $name;

        return $this;
    }

    /**
     * Get nameGb
     *
     * @return string
     */
    public function getNameGb(): string
    {
        return $this->nameGb;
    }

    /**
     * Set nameFr
     *
     * @param string $name
     * @return Country
     */
    public function setNomFr(string $name): Country
    {
        $this->nameFr = $name;

        return $this;
    }

    /**
     * Get nameFr
     *
     * @return string
     */
    public function getNamemFr(): string
    {
        return $this->nameFr;
    }
}