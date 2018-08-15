<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ComunidadesRepository")
 */
class Comunidades
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $den_com;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $ccaa_gis;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Provincias", mappedBy="id_com")
     */
    private $provincias;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Colonia", mappedBy="ccaa")
     */
    private $colonias;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Territorio", mappedBy="ccaa")
     */
    private $territorios;

    public function __construct()
    {
        $this->provincias = new ArrayCollection();
        $this->colonias = new ArrayCollection();
        $this->territorios = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDenCom(): ?string
    {
        return $this->den_com;
    }

    public function setDenCom(?string $den_com): self
    {
        $this->den_com = $den_com;

        return $this;
    }

    public function getCcaaGis(): ?string
    {
        return $this->ccaa_gis;
    }

    public function setCcaaGis(?string $ccaa_gis): self
    {
        $this->ccaa_gis = $ccaa_gis;

        return $this;
    }

    /**
     * @return Collection|Provincias[]
     */
    public function getProvincias(): Collection
    {
        return $this->provincias;
    }

    public function addProvincia(Provincias $provincia): self
    {
        if (!$this->provincias->contains($provincia)) {
            $this->provincias[] = $provincia;
            $provincia->setIdCom($this);
        }

        return $this;
    }

    public function removeProvincia(Provincias $provincia): self
    {
        if ($this->provincias->contains($provincia)) {
            $this->provincias->removeElement($provincia);
            // set the owning side to null (unless already changed)
            if ($provincia->getIdCom() === $this) {
                $provincia->setIdCom(null);
            }
        }

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
            $colonia->setCcaa($this);
        }

        return $this;
    }

    public function removeColonia(Colonia $colonia): self
    {
        if ($this->colonias->contains($colonia)) {
            $this->colonias->removeElement($colonia);
            // set the owning side to null (unless already changed)
            if ($colonia->getCcaa() === $this) {
                $colonia->setCcaa(null);
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
            $territorio->setCcaa($this);
        }

        return $this;
    }

    public function removeTerritorio(Territorio $territorio): self
    {
        if ($this->territorios->contains($territorio)) {
            $this->territorios->removeElement($territorio);
            // set the owning side to null (unless already changed)
            if ($territorio->getCcaa() === $this) {
                $territorio->setCcaa(null);
            }
        }

        return $this;
    }
}
