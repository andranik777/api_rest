<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use App\Repository\FilmRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=FilmRepository::class)
 */
#[ApiResource(
    denormalizationContext: ['groups'=>['film_write']],
    normalizationContext: ['groups'=>['film_read']]
)]

#[ApiFilter(SearchFilter::class,properties: ['id'=>'exact','titre'=>'partial'])]
class Film
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"film_read","film_write"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"film_read","film_write"})
     */
    private $titre;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups({"film_read","film_write"})
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"film_read","film_write"})
     */
    private $realisateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

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

    public function getRealisateur(): ?string
    {
        return $this->realisateur;
    }

    public function setRealisateur(string $realisateur): self
    {
        $this->realisateur = $realisateur;

        return $this;
    }
}
