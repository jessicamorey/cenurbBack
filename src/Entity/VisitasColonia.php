<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\VisitasColoniaRepository")
 */
class VisitasColonia
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Colonia", inversedBy="visitasColonias")
     * @ORM\JoinColumn(nullable=false)
     */
    private $colonia;

    /**
     * @ORM\Column(type="integer")
     */
    private $usuario;

    /**
     * @ORM\Column(type="integer")
     */
    private $numVisita;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numNidos;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numNidosOcupados;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numNidosVacios;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numNidosExito;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $completo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getColonia(): ?Colonia
    {
        return $this->colonia;
    }

    public function setColonia(?Colonia $colonia): self
    {
        $this->colonia = $colonia;

        return $this;
    }

    public function getUsuario(): ?int
    {
        return $this->usuario;
    }

    public function setUsuario(int $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getNumVisita(): ?int
    {
        return $this->numVisita;
    }

    public function setNumVisita(int $numVisita): self
    {
        $this->numVisita = $numVisita;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(?\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getNumNidos(): ?int
    {
        return $this->numNidos;
    }

    public function setNumNidos(?int $numNidos): self
    {
        $this->numNidos = $numNidos;

        return $this;
    }

    public function getNumNidosOcupados(): ?int
    {
        return $this->numNidosOcupados;
    }

    public function setNumNidosOcupados(?int $numNidosOcupados): self
    {
        $this->numNidosOcupados = $numNidosOcupados;

        return $this;
    }

    public function getNumNidosVacios(): ?int
    {
        return $this->numNidosVacios;
    }

    public function setNumNidosVacios(?int $numNidosVacios): self
    {
        $this->numNidosVacios = $numNidosVacios;

        return $this;
    }

    public function getNumNidosExito(): ?int
    {
        return $this->numNidosExito;
    }

    public function setNumNidosExito(?int $numNidosExito): self
    {
        $this->numNidosExito = $numNidosExito;

        return $this;
    }

    public function getCompleto(): ?bool
    {
        return $this->completo;
    }

    public function setCompleto(?bool $completo): self
    {
        $this->completo = $completo;

        return $this;
    }
}
