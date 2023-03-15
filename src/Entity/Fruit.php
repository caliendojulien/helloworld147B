<?php

namespace App\Entity;

use App\Repository\FruitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FruitRepository::class)]
class Fruit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $nom = null;

    #[ORM\Column]
    private ?bool $pepins = null;

    #[ORM\Column]
    private ?int $kcal = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function isPepins(): ?bool
    {
        return $this->pepins;
    }

    public function setPepins(bool $pepins): self
    {
        $this->pepins = $pepins;

        return $this;
    }

    public function getKcal(): ?int
    {
        return $this->kcal;
    }

    public function setKcal(int $kcal): self
    {
        $this->kcal = $kcal;

        return $this;
    }
}
