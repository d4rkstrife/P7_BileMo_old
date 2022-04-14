<?php

namespace App\Entity;

use App\Repository\CustomerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CustomerRepository::class)]
class Customer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $firstName;

    #[ORM\Column(type: 'string', length: 255)]
    private $lastName;

    #[ORM\Column(type: 'string', length: 255)]
    private $userName;

    #[ORM\Column(type: 'string', length: 255)]
    private $adress;

    #[ORM\Column(type: 'datetime')]
    private $SignUpDate;

    #[ORM\ManyToOne(targetEntity: Reseeler::class, inversedBy: 'customers')]
    #[ORM\JoinColumn(nullable: false)]
    private $reseeler;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getSignUpDate(): ?\DateTimeInterface
    {
        return $this->SignUpDate;
    }

    public function setSignUpDate(\DateTimeInterface $SignUpDate): self
    {
        $this->SignUpDate = $SignUpDate;

        return $this;
    }

    public function getReseeler(): ?Reseeler
    {
        return $this->reseeler;
    }

    public function setReseeler(?Reseeler $reseeler): self
    {
        $this->reseeler = $reseeler;

        return $this;
    }
}
