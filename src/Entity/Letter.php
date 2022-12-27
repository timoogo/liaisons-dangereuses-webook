<?php

namespace App\Entity;

use App\Repository\LetterRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LetterRepository::class)]
class Letter
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $title;

    #[ORM\ManyToOne(targetEntity: Character::class, inversedBy: 'sent_letters')]
    private $sender;

    #[ORM\ManyToOne(targetEntity: Character::class, inversedBy: 'received_letters')]
    private $receiver;

    #[ORM\Column(type: 'string', length: 1000000)]
    private $content;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSender(): ?Character
    {
        return $this->sender;
    }

    public function setSender(?Character $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    public function getReceiver(): ?Character
    {
        return $this->receiver;
    }

    public function setReceiver(?Character $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
