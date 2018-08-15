<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\PoblacionesRepository")
 */
class Poblaciones
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $den_pob;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $id_utm;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $id_prov;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $id_pobp;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Colonia", mappedBy="municipio")
     */
    private $colonias;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Territorio", mappedBy="municipio")
     */
    private $territorios;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CensoMunicipio", mappedBy="municipio")
     */
    private $censoMunicipios;

    public function __construct()
    {
        $this->colonias = new ArrayCollection();
        $this->territorios = new ArrayCollection();
        $this->censoMunicipios = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDenPob(): ?string
    {
        return $this->den_pob;
    }

    public function setDenPob(string $den_pob): self
    {
        $this->den_pob = $den_pob;

        return $this;
    }

    public function getIdUtm(): ?float
    {
        return $this->id_utm;
    }

    public function setIdUtm(?float $id_utm): self
    {
        $this->id_utm = $id_utm;

        return $this;
    }

    public function getIdProv(): ?int
    {
        return $this->id_prov;
    }

    public function setIdProv(?int $id_prov): self
    {
        $this->id_prov = $id_prov;

        return $this;
    }

    public function getIdPobp(): ?float
    {
        return $this->id_pobp;
    }

    public function setIdPobp(?float $id_pobp): self
    {
        $this->id_pobp = $id_pobp;

        return $this;
    }

    /**
     * @return Collection|Colonia[]
     */
    public function getColonias(): Collection
    {
        return $this->colonias;
    }

    public function addColonia(Colonia $colonia): self
    {
        if (!$this->colonias->contains($colonia)) {
            $this->colonias[] = $colonia;
            $colonia->setMunicipio($this);
        }

        return $this;
    }

    public function removeColonia(Colonia $colonia): self
    {
        if ($this->colonias->contains($colonia)) {
            $this->colonias->removeElement($colonia);
            // set the owning side to null (unless already changed)
            if ($colonia->getMunicipio() === $this) {
                $colonia->setMunicipio(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Territorio[]
     */
    public function getTerritorios(): Collection
    {
        return $this->territorios;
    }

    public function addTerritorio(Territorio $territorio): self
    {
        if (!$this->territorios->contains($territorio)) {
            $this->territorios[] = $territorio;
            $territorio->setMunicipio($this);
        }

        return $this;
    }

    public function removeTerritorio(Territorio $territorio): self
    {
        if ($this->territorios->contains($territorio)) {
            $this->territorios->removeElement($territorio);
            // set the owning side to null (unless already changed)
            if ($territorio->getMunicipio() === $this) {
                $territorio->setMunicipio(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CensoMunicipio[]
     */
    public function getCensoMunicipios(): Collection
    {
        return $this->censoMunicipios;
    }

    public function addCensoMunicipio(CensoMunicipio $censoMunicipio): self
    {
        if (!$this->censoMunicipios->contains($censoMunicipio)) {
            $this->censoMunicipios[] = $censoMunicipio;
            $censoMunicipio->setMunicipio($this);
        }

        return $this;
    }

    public function removeCensoMunicipio(CensoMunicipio $censoMunicipio): self
    {
        if ($this->censoMunicipios->contains($censoMunicipio)) {
            $this->censoMunicipios->removeElement($censoMunicipio);
            // set the owning side to null (unless already changed)
            if ($censoMunicipio->getMunicipio() === $this) {
                $censoMunicipio->setMunicipio(null);
            }
        }

        return $this;
    }
}
