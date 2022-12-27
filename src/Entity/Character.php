<?php

namespace App\Entity;

use App\Repository\CharacterRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CharacterRepository::class)]
#[ORM\Table(name: '`character`')]
class Character
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 10000)]
    private $description;

    #[ORM\OneToMany(mappedBy: 'sender', targetEntity: Letter::class)]
    private $sent_letters;

    #[ORM\OneToMany(mappedBy: 'receiver', targetEntity: Letter::class)]
    private $received_letters;

    #[ORM\Column(type: 'boolean')]
    private $IsOriginal;

    public function __construct()
    {
        $this->sent_letters = new ArrayCollection();
        $this->received_letters = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Letter>
     */
    public function getSentLetters(): Collection
    {
        return $this->sent_letters;
    }

    public function addSentLetter(Letter $sentLetter): self
    {
        if (!$this->sent_letters->contains($sentLetter)) {
            $this->sent_letters[] = $sentLetter;
            $sentLetter->setSender($this);
        }

        return $this;
    }

    public function removeSentLetter(Letter $sentLetter): self
    {
        if ($this->sent_letters->removeElement($sentLetter)) {
            // set the owning side to null (unless already changed)
            if ($sentLetter->getSender() === $this) {
                $sentLetter->setSender(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Letter>
     */
    public function getReceivedLetters(): Collection
    {
        return $this->received_letters;
    }

    public function addReceivedLetter(Letter $receivedLetter): self
    {
        if (!$this->received_letters->contains($receivedLetter)) {
            $this->received_letters[] = $receivedLetter;
            $receivedLetter->setReceiver($this);
        }

        return $this;
    }

    public function removeReceivedLetter(Letter $receivedLetter): self
    {
        if ($this->received_letters->removeElement($receivedLetter)) {
            // set the owning side to null (unless already changed)
            if ($receivedLetter->getReceiver() === $this) {
                $receivedLetter->setReceiver(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->getName();
    }

    public function getIsOriginal(): ?bool
    {
        return $this->IsOriginal;
    }

    public function setIsOriginal(bool $IsOriginal): self
    {
        $this->IsOriginal = $IsOriginal;

        return $this;
    }
}
