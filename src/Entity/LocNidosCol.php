<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LocNidosColRepository")
 */
class LocNidosCol
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
    private $patioInferior;

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

    public function getPatioInferior(): ?bool
    {
        return $this->patioInferior;
    }

    public function setPatioInferior(?bool $patioInferior): self
    {
        $this->patioInferior = $patioInferior;

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
}
