<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\CensoMunicipioRepository")
 */
class CensoMunicipio
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Poblaciones", inversedBy="censoMunicipios")
     * @ORM\JoinColumn(nullable=false)
     */
    private $municipio;

    /**
     * @ORM\Column(type="integer")
     */
    private $especie;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $completo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMunicipio(): ?poblaciones
    {
        return $this->municipio;
    }

    public function setMunicipio(?poblaciones $municipio): self
    {
        $this->municipio = $municipio;

        return $this;
    }

    public function getEspecie(): ?int
    {
        return $this->especie;
    }

    public function setEspecie(int $especie): self
    {
        $this->especie = $especie;

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
