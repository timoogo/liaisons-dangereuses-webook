<?php

namespace App\Entity;

use App\Repository\OfficerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OfficerRepository::class)]
class Officer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\ManyToOne(targetEntity: ArtificialSatellite::class, inversedBy: 'officers')]
    private $spacecraft_related;

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

    public function getSpacecraftRelated(): ?ArtificialSatellite
    {
        return $this->spacecraft_related;
    }

    public function setSpacecraftRelated(?ArtificialSatellite $spacecraft_related): self
    {
        $this->spacecraft_related = $spacecraft_related;

        return $this;
    }
}
