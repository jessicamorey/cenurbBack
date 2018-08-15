<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProvinciasRepository")
 */
class Provincias
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
    private $den_prov;

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    private $denc_prov;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $cap_prov;

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    private $prtf_prov;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\comunidades", inversedBy="provincias")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_com;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $id_reg;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $pro_gis;

    /**
     * @ORM\Column(type="smallint")
     */
    private $inseo;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Colonia", mappedBy="provincia")
     */
    private $colonias;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Territorio", mappedBy="provincia")
     */
    private $territorios;

    public function __construct()
    {
        $this->colonias = new ArrayCollection();
        $this->territorios = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDenProv(): ?string
    {
        return $this->den_prov;
    }

    public function setDenProv(?string $den_prov): self
    {
        $this->den_prov = $den_prov;

        return $this;
    }

    public function getDencProv(): ?string
    {
        return $this->denc_prov;
    }

    public function setDencProv(?string $denc_prov): self
    {
        $this->denc_prov = $denc_prov;

        return $this;
    }

    public function getCapProv(): ?string
    {
        return $this->cap_prov;
    }

    public function setCapProv(?string $cap_prov): self
    {
        $this->cap_prov = $cap_prov;

        return $this;
    }

    public function getPrtfProv(): ?string
    {
        return $this->prtf_prov;
    }

    public function setPrtfProv(?string $prtf_prov): self
    {
        $this->prtf_prov = $prtf_prov;

        return $this;
    }

    public function getIdCom(): ?comunidades
    {
        return $this->id_com;
    }

    public function setIdCom(?comunidades $id_com): self
    {
        $this->id_com = $id_com;

        return $this;
    }

    public function getIdReg(): ?int
    {
        return $this->id_reg;
    }

    public function setIdReg(?int $id_reg): self
    {
        $this->id_reg = $id_reg;

        return $this;
    }

    public function getProGis(): ?int
    {
        return $this->pro_gis;
    }

    public function setProGis(?int $pro_gis): self
    {
        $this->pro_gis = $pro_gis;

        return $this;
    }

    public function getInseo(): ?int
    {
        return $this->inseo;
    }

    public function setInseo(int $inseo): self
    {
        $this->inseo = $inseo;

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
            $colonia->setProvincia($this);
        }

        return $this;
    }

    public function removeColonia(Colonia $colonia): self
    {
        if ($this->colonias->contains($colonia)) {
            $this->colonias->removeElement($colonia);
            // set the owning side to null (unless already changed)
            if ($colonia->getProvincia() === $this) {
                $colonia->setProvincia(null);
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
            $territorio->setProvincia($this);
        }

        return $this;
    }

    public function removeTerritorio(Territorio $territorio): self
    {
        if ($this->territorios->contains($territorio)) {
            $this->territorios->removeElement($territorio);
            // set the owning side to null (unless already changed)
            if ($territorio->getProvincia() === $this) {
                $territorio->setProvincia(null);
            }
        }

        return $this;
    }
}
