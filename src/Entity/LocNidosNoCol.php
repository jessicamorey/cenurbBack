<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LocNidosNoColRepository")
 */
class LocNidosNoCol
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $fachada;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $trasera;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $lateralDerecho;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $lateralIzquierdo;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $patioInterior;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numPiso;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Emplazamiento")
     */
    private $emplazamiento;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $huso;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $lat;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $lon;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Territorio", mappedBy="locNidos", cascade={"persist", "remove"})
     */
    private $territorio;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFachada(): ?bool
    {
        return $this->fachada;
    }

    public function setFachada(?bool $fachada): self
    {
        $this->fachada = $fachada;

        return $this;
    }

    public function getTrasera(): ?bool
    {
        return $this->trasera;
    }

    public function setTrasera(?bool $trasera): self
    {
        $this->trasera = $trasera;

        return $this;
    }

    public function getLateralDerecho(): ?bool
    {
        return $this->lateralDerecho;
    }

    public function setLateralDerecho(?bool $lateralDerecho): self
    {
        $this->lateralDerecho = $lateralDerecho;

        return $this;
    }

    public function getLateralIzquierdo(): ?bool
    {
        return $this->lateralIzquierdo;
    }

    public function setLateralIzquierdo(?bool $lateralIzquierdo): self
    {
        $this->lateralIzquierdo = $lateralIzquierdo;

        return $this;
    }

    public function getPatioInterior(): ?bool
    {
        return $this->patioInterior;
    }

    public function setPatioInterior(?bool $patioInterior): self
    {
        $this->patioInterior = $patioInterior;

        return $this;
    }

    public function getNumPiso(): ?int
    {
        return $this->numPiso;
    }

    public function setNumPiso(?int $numPiso): self
    {
        $this->numPiso = $numPiso;

        return $this;
    }

    public function getEmplazamiento(): ?Emplazamiento
    {
        return $this->emplazamiento;
    }

    public function setEmplazamiento(?Emplazamiento $emplazamiento): self
    {
        $this->emplazamiento = $emplazamiento;

        return $this;
    }

    public function getHuso(): ?string
    {
        return $this->huso;
    }

    public function setHuso(?string $huso): self
    {
        $this->huso = $huso;

        return $this;
    }

    public function getLat(): ?float
    {
        return $this->lat;
    }

    public function setLat(?float $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getLon(): ?float
    {
        return $this->lon;
    }

    public function setLon(?float $lon): self
    {
        $this->lon = $lon;

        return $this;
    }

    public function getTerritorio(): ?Territorio
    {
        return $this->territorio;
    }

    public function setTerritorio(?Territorio $territorio): self
    {
        $this->territorio = $territorio;

        // set (or unset) the owning side of the relation if necessary
        $newLocNidos = $territorio === null ? null : $this;
        if ($newLocNidos !== $territorio->getLocNidos()) {
            $territorio->setLocNidos($newLocNidos);
        }

        return $this;
    }
}
