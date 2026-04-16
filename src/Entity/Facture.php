<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FactureRepository::class)]
class Facture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $SIRET = null;

    #[ORM\Column]
    private ?int $numéro = null;

    #[ORM\Column(length: 255)]
    private ?string $libelle = null;

    #[ORM\Column]
    private ?int $TVA = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSIRET(): ?int
    {
        return $this->SIRET;
    }

    public function setSIRET(int $SIRET): static
    {
        $this->SIRET = $SIRET;

        return $this;
    }

    public function getNuméro(): ?int
    {
        return $this->numéro;
    }

    public function setNuméro(int $numéro): static
    {
        $this->numéro = $numéro;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): static
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getTVA(): ?int
    {
        return $this->TVA;
    }

    public function setTVA(int $TVA): static
    {
        $this->TVA = $TVA;

        return $this;
    }
}
