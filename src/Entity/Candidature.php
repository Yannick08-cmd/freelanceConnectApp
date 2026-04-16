<?php

namespace App\Entity;

use App\Repository\CandidatureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CandidatureRepository::class)]
class Candidature
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_candidature = null;

    #[ORM\Column(length: 255)]
    private ?string $statut = null;

    #[ORM\Column(length: 255)]
    private ?string $message = null;

    #[ORM\Column(length: 255)]
    private ?string $cv = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $date_creation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCandidature(): ?int
    {
        return $this->id_candidature;
    }

    public function setIdCandidature(int $id_candidature): static
    {
        $this->id_candidature = $id_candidature;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getCv(): ?string
    {
        return $this->cv;
    }

    public function setCv(string $cv): static
    {
        $this->cv = $cv;

        return $this;
    }

    public function getDateCreation(): ?\DateTime
    {
        return $this->date_creation;
    }

    public function setDateCreation(?\DateTime $date_creation): static
    {
        $this->date_creation = $date_creation;

        return $this;
    }
}
