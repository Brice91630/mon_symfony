<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\OneToMany(mappedBy: 'category', targetEntity: Articles::class)]
    private $articles;

    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }

    // Getter and Setter for 'id'
    public function getId(): ?int
    {
        return $this->id;
    }

    // Getter and Setter for 'name'
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getArticles(): Collection
    {
        return $this->articles;
    }
}
