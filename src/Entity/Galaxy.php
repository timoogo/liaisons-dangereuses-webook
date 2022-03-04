<?php

namespace App\Entity;

use App\Repository\GalaxyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GalaxyRepository::class)]
class Galaxy
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $HubbleSequence;

    #[ORM\Column(type: 'text', nullable: true)]
    private $description;

    #[ORM\OneToMany(mappedBy: 'galaxy', targetEntity: Planet::class)]
    private $planets;

    public function __construct()
    {
        $this->planets = new ArrayCollection();
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

    public function getHubbleSequence(): ?string
    {
        return $this->HubbleSequence;
    }

    public function setHubbleSequence(string $HubbleSequence): self
    {
        $this->HubbleSequence = $HubbleSequence;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Planet>
     */
    public function getPlanets(): Collection
    {
        return $this->planets;
    }

    public function addPlanet(Planet $planet): self
    {
        if (!$this->planets->contains($planet)) {
            $this->planets[] = $planet;
            $planet->setGalaxy($this);
        }

        return $this;
    }

    public function removePlanet(Planet $planet): self
    {
        if ($this->planets->removeElement($planet)) {
            // set the owning side to null (unless already changed)
            if ($planet->getGalaxy() === $this) {
                $planet->setGalaxy(null);
            }
        }

        return $this;
    }
}
