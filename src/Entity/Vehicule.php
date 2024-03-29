<?php

namespace App\Entity;

use App\Repository\VehiculeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VehiculeRepository::class)
 */
class Vehicule
{
     /**
     * @var string
     *
     * @ORM\Column(name="id", type="string")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Doctrine\Bundle\DoctrineBundle\IdGenerator")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $country_of_registration;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numberplate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $brand;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $model;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $color;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $year;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, options={"default":"default-vehicule.jpg"})
     */
    private $vehicule_picture;

    /**
     * @ORM\ManyToOne(targetEntity=TypeOfVehicule::class)
     */
    private $typeOfVehicule;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCountryOfRegistration(): ?string
    {
        return $this->country_of_registration;
    }

    public function setCountryOfRegistration(?string $country_of_registration): self
    {
        $this->country_of_registration = $country_of_registration;

        return $this;
    }

    public function getNumberplate(): ?string
    {
        return $this->numberplate;
    }

    public function setNumberplate(?string $numberplate): self
    {
        $this->numberplate = $numberplate;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(?string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getVehiculePicture(): ?string
    {
        return $this->vehicule_picture;
    }

    public function setVehiculePicture(?string $vehicule_picture): self
    {
        $this->vehicule_picture = $vehicule_picture;

        return $this;
    }

    public function getTypeOfVehicule(): ?TypeOfVehicule
    {
        return $this->typeOfVehicule;
    }

    public function setTypeOfVehicule(?TypeOfVehicule $typeOfVehicule): self
    {
        $this->typeOfVehicule = $typeOfVehicule;

        return $this;
    }
}
