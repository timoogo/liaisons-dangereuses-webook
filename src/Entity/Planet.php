<?php

namespace App\Entity;

use App\Repository\PlanetRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlanetRepository::class)]
class Planet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'integer')]
    private $diameter;

    #[ORM\Column(type: 'string', length: 255)]
    private $galaxy;

    #[ORM\OneToMany(mappedBy: 'planet', targetEntity: NaturalSatellite::class, orphanRemoval: true)]
    private $satelites_r;

    public function __construct()
    {
        $this->satelites_r = new ArrayCollection();
    }
    public function __toString()
    {
        return $this->getName();
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

    public function getDiameter(): ?int
    {
        return $this->diameter;
    }

    public function setDiameter(int $diameter): self
    {
        $this->diameter = $diameter;

        return $this;
    }

    public function getGalaxy(): ?string
    {
        return $this->galaxy;
    }

    public function setGalaxy(string $galaxy): self
    {
        $this->galaxy = $galaxy;

        return $this;
    }

    /**
     * @return Collection<int, NaturalSatellite>
     */
    public function getSatelitesR(): Collection
    {
        return $this->satelites_r;
    }

    public function addSatelitesR(NaturalSatellite $satelitesR): self
    {
        if (!$this->satelites_r->contains($satelitesR)) {
            $this->satelites_r[] = $satelitesR;
            $satelitesR->setPlanet($this);
        }

        return $this;
    }

    public function removeSatelitesR(NaturalSatellite $satelitesR): self
    {
        if ($this->satelites_r->removeElement($satelitesR)) {
            // set the owning side to null (unless already changed)
            if ($satelitesR->getPlanet() === $this) {
                $satelitesR->setPlanet(null);
            }
        }

        return $this;
    }
}
