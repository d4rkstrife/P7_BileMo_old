<?php

namespace App\Entity;

use App\Repository\PhoneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PhoneRepository::class)]
class Phone
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'integer')]
    private $price;

    #[ORM\Column(type: 'string', length: 255)]
    private $brand;

    #[ORM\Column(type: 'text')]
    private $description;

    #[ORM\OneToMany(mappedBy: 'phone', targetEntity: PhonePicture::class, orphanRemoval: true)]
    private $phonePictures;

    public function __construct()
    {
        $this->phonePictures = new ArrayCollection();
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

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

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
     * @return Collection<int, PhonePicture>
     */
    public function getPhonePictures(): Collection
    {
        return $this->phonePictures;
    }

    public function addPhonePicture(PhonePicture $phonePicture): self
    {
        if (!$this->phonePictures->contains($phonePicture)) {
            $this->phonePictures[] = $phonePicture;
            $phonePicture->setPhone($this);
        }

        return $this;
    }

    public function removePhonePicture(PhonePicture $phonePicture): self
    {
        if ($this->phonePictures->removeElement($phonePicture)) {
            // set the owning side to null (unless already changed)
            if ($phonePicture->getPhone() === $this) {
                $phonePicture->setPhone(null);
            }
        }

        return $this;
    }
}
