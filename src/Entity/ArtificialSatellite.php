<?php

namespace App\Entity;

use App\Repository\ArtificialSatelliteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArtificialSatelliteRepository::class)]
class ArtificialSatellite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $sponsor;

    #[ORM\Column(type: 'string', length: 255)]
    private $type_of_mission;

    #[ORM\OneToMany(mappedBy: 'spacecraft_related', targetEntity: Officer::class)]
    private $officers;

    public function __construct()
    {
        $this->officers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSponsor(): ?string
    {
        return $this->sponsor;
    }

    public function setSponsor(string $sponsor): self
    {
        $this->sponsor = $sponsor;

        return $this;
    }

    public function getTypeOfMission(): ?string
    {
        return $this->type_of_mission;
    }

    public function setTypeOfMission(string $type_of_mission): self
    {
        $this->type_of_mission = $type_of_mission;

        return $this;
    }
    public function __toString()
    {
        return $this->getName();
    }

    /**
     * @return Collection<int, Officer>
     */
    public function getOfficers(): Collection
    {
        return $this->officers;
    }

    public function addOfficer(Officer $officer): self
    {
        if (!$this->officers->contains($officer)) {
            $this->officers[] = $officer;
            $officer->setSpacecraftRelated($this);
        }

        return $this;
    }

    public function removeOfficer(Officer $officer): self
    {
        if ($this->officers->removeElement($officer)) {
            // set the owning side to null (unless already changed)
            if ($officer->getSpacecraftRelated() === $this) {
                $officer->setSpacecraftRelated(null);
            }
        }

        return $this;
    }

}
