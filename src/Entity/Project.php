<?php

namespace App\Entity;

use App\Entity\Category;
use App\Entity\Client;
use App\Repository\ProjectRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjectRepository::class)
 * @ApiResource(
 *      normalizationContext={"groups" = {"read:collection", "read:Project"}},
 *      itemOperations={
 *          "get" = {
 *              "normalization_context" = {"groups" = {"read:collection", "read:item", "read:Project"}}
 *          }
 *      }
 * )
 */
class Project
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"read:collection"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     * @Groups({"read:collection"})
     */
    private $maintitle;

    /**
     * @ORM\Column(type="string", length=150)
     * @Groups({"read:item"})
     */
    private $subtitle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"read:collection"})
     */
    private $banner;

    /**
     * @ORM\Column(type="text")
     * @Groups({"read:item"})
     */
    private $description;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $state;

    /**
     * @ORM\ManyToMany(targetEntity=Category::class, inversedBy="projects")
     * @Groups({"read:collection"})
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity=Image::class, mappedBy="project")
     * @Groups({"read:item"})
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="project")
     * @Groups({"read:item"})
     */
    private $client;

    public function __construct()
    {
        $this->category = new ArrayCollection();
        $this->image = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMaintitle(): ?string
    {
        return $this->maintitle;
    }

    public function setMaintitle(string $maintitle): self
    {
        $this->maintitle = $maintitle;

        return $this;
    }

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(string $subtitle): self
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    public function getBanner(): ?string
    {
        return $this->banner;
    }

    public function setBanner(?string $banner): self
    {
        $this->banner = $banner;

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

    public function getState(): ?bool
    {
        return $this->state;
    }

    public function setState(bool $state): self
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return Collection|Category[]
     */
    public function getCategory(): Collection
    {
        return $this->category;
    }

    public function addCategory(Category $category): self
    {
        if (!$this->category->contains($category)) {
            $this->category[] = $category;
        }

        return $this;
    }

    public function removeCategory(Category $category): self
    {
        $this->category->removeElement($category);

        return $this;
    }

    /**
     * @return Collection|Image[]
     */
    public function getImage(): Collection
    {
        return $this->image;
    }

    public function addImage(Image $image): self
    {
        if (!$this->image->contains($image)) {
            $this->image[] = $image;
            $image->setProject($this);
        }

        return $this;
    }

    public function removeImage(Image $image): self
    {
        if ($this->image->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getProject() === $this) {
                $image->setProject(null);
            }
        }

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function __toString(): string
        {
            return (string) $this->getClient('name');
        }

}

