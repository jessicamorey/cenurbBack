<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\TerritorioRepository")
 */
class Territorio
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $especie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\Column(type="integer")
     */
    private $temporada;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $barrio;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $calleNumPiso;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nombreCentro;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoPropiedad")
     */
    private $tipoPropiedad;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoEdificio")
     */
    private $tipoEdificio;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\LocNidosNoCol", inversedBy="amenazada", cascade={"persist", "remove"})
     */
    private $locNidos;

    /**
     * @ORM\Column(type="boolean")
     */
    private $amenazada;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $observaciones;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $vacio;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Comunidades", inversedBy="territorios")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ccaa;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Provincias", inversedBy="territorios")
     * @ORM\JoinColumn(nullable=false)
     */
    private $provincia;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Poblaciones", inversedBy="territorios")
     * @ORM\JoinColumn(nullable=false)
     */
    private $municipio;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getTemporada(): ?int
    {
        return $this->temporada;
    }

    public function setTemporada(int $temporada): self
    {
        $this->temporada = $temporada;

        return $this;
    }

    public function getBarrio(): ?string
    {
        return $this->barrio;
    }

    public function setBarrio(?string $barrio): self
    {
        $this->barrio = $barrio;

        return $this;
    }

    public function getCalleNumPiso(): ?string
    {
        return $this->calleNumPiso;
    }

    public function setCalleNumPiso(?string $calleNumPiso): self
    {
        $this->calleNumPiso = $calleNumPiso;

        return $this;
    }

    public function getNombreCentro(): ?string
    {
        return $this->nombreCentro;
    }

    public function setNombreCentro(?string $nombreCentro): self
    {
        $this->nombreCentro = $nombreCentro;

        return $this;
    }

    public function getTipoPropiedad(): ?TipoPropiedad
    {
        return $this->tipoPropiedad;
    }

    public function setTipoPropiedad(?TipoPropiedad $tipoPropiedad): self
    {
        $this->tipoPropiedad = $tipoPropiedad;

        return $this;
    }

    public function getTipoEdificio(): ?TipoEdificio
    {
        return $this->tipoEdificio;
    }

    public function setTipoEdificio(?TipoEdificio $tipoEdificio): self
    {
        $this->tipoEdificio = $tipoEdificio;

        return $this;
    }

    public function getLocNidos(): ?LocNidosNoCol
    {
        return $this->locNidos;
    }

    public function setLocNidos(?LocNidosNoCol $locNidos): self
    {
        $this->locNidos = $locNidos;

        return $this;
    }

    public function getAmenazada(): ?bool
    {
        return $this->amenazada;
    }

    public function setAmenazada(bool $amenazada): self
    {
        $this->amenazada = $amenazada;

        return $this;
    }

    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }

    public function setObservaciones(?string $observaciones): self
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    public function getVacio(): ?bool
    {
        return $this->vacio;
    }

    public function setVacio(?bool $vacio): self
    {
        $this->vacio = $vacio;

        return $this;
    }

    public function getCcaa(): ?comunidades
    {
        return $this->ccaa;
    }

    public function setCcaa(?comunidades $ccaa): self
    {
        $this->ccaa = $ccaa;

        return $this;
    }

    public function getProvincia(): ?provincias
    {
        return $this->provincia;
    }

    public function setProvincia(?provincias $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
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
}
