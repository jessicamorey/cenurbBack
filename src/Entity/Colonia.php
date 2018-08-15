<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ColoniaRepository")
 */
class Colonia
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

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
     * @ORM\Column(type="integer")
     */
    private $temporada;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\LocNidosCol", cascade={"persist", "remove"})
     */
    private $locNidos;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $vacio;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\VisitasColonia", mappedBy="colonia")
     */
    private $visitasColonias;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Comunidades", inversedBy="colonias")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ccaa;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Provincias", inversedBy="colonias")
     * @ORM\JoinColumn(nullable=false)
     */
    private $provincia;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Poblaciones", inversedBy="colonias")
     * @ORM\JoinColumn(nullable=false)
     */
    private $municipio;

    public function __construct()
    {
        $this->visitasColonias = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTemporada(): ?int
    {
        return $this->temporada;
    }

    public function setTemporada(int $temporada): self
    {
        $this->temporada = $temporada;

        return $this;
    }

    public function getLocNidos(): ?LocNidosCol
    {
        return $this->locNidos;
    }

    public function setLocNidos(?LocNidosCol $locNidos): self
    {
        $this->locNidos = $locNidos;

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

    /**
     * @return Collection|VisitasColonia[]
     */
    public function getVisitasColonias(): Collection
    {
        return $this->visitasColonias;
    }

    public function addVisitasColonia(VisitasColonia $visitasColonia): self
    {
        if (!$this->visitasColonias->contains($visitasColonia)) {
            $this->visitasColonias[] = $visitasColonia;
            $visitasColonia->setColonia($this);
        }

        return $this;
    }

    public function removeVisitasColonia(VisitasColonia $visitasColonia): self
    {
        if ($this->visitasColonias->contains($visitasColonia)) {
            $this->visitasColonias->removeElement($visitasColonia);
            // set the owning side to null (unless already changed)
            if ($visitasColonia->getColonia() === $this) {
                $visitasColonia->setColonia(null);
            }
        }

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
