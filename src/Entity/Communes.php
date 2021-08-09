<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CommunesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=CommunesRepository::class)
 */

 
class Communes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $codePostal;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $lon;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $lat;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $boost;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $codeDepartement;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $codeRegion;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $fields = [];

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $format;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $geometry;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(?string $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getLon(): ?string
    {
        return $this->lon;
    }

    public function setLon(?string $lon): self
    {
        $this->lon = $lon;

        return $this;
    }

    public function getLat(): ?string
    {
        return $this->lat;
    }

    public function setLat(?string $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getBoost(): ?string
    {
        return $this->boost;
    }

    public function setBoost(?string $boost): self
    {
        $this->boost = $boost;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getCodeDepartement(): ?string
    {
        return $this->codeDepartement;
    }

    public function setCodeDepartement(?string $codeDepartement): self
    {
        $this->codeDepartement = $codeDepartement;

        return $this;
    }

    public function getCodeRegion(): ?string
    {
        return $this->codeRegion;
    }

    public function setCodeRegion(?string $codeRegion): self
    {
        $this->codeRegion = $codeRegion;

        return $this;
    }

    public function getFields(): ?array
    {
        return $this->fields;
    }

    public function setFields(?array $fields): self
    {
        $this->fields = $fields;

        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(?string $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function getGeometry(): ?string
    {
        return $this->geometry;
    }

    public function setGeometry(?string $geometry): self
    {
        $this->geometry = $geometry;

        return $this;
    }
}
