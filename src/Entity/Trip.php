<?php

namespace App\Entity;

use App\Repository\TripRepository;
use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;

/**
 * @ORM\Entity(repositoryClass=TripRepository::class)
 */
class Trip implements JsonSerializable
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
     * @ORM\Column(type="string", length=255)
     */
    private $departure;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $arrival;

    /**
     * @ORM\Column(type="date")
     */
    private $date_of_trip;

    /**
     * @ORM\Column(type="integer")
     */
    private $passengers;

    /**
     * @ORM\Column(type="boolean", options={"default" : 0})
     */
    private $trip_full;

    /**
     * @ORM\Column(type="boolean", options={"default" : 0})
     */
    private $trip_completed;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $driver;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $duration;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $distance;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $startTime;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $tripStarted;

    /**
     * @ORM\Column(type="date")
     */
    private $created_at;


    public function getId(): ?string
    {
        return $this->id;
    }

    public function getDeparture(): ?string
    {
        return $this->departure;
    }

    public function setDeparture(string $departure): self
    {
        $this->departure = $departure;

        return $this;
    }

    public function getArrival(): ?string
    {
        return $this->arrival;
    }

    public function setArrival(string $arrival): self
    {
        $this->arrival = $arrival;

        return $this;
    }

    public function getDateOfTrip(): ?\DateTimeInterface
    {
        return $this->date_of_trip;
    }

    public function setDateOfTrip(\DateTimeInterface $date_of_trip): self
    {
        $this->date_of_trip = $date_of_trip;

        return $this;
    }

    public function getPassengers(): ?int
    {
        return $this->passengers;
    }

    public function setPassengers(int $passengers): self
    {
        $this->passengers = $passengers;

        return $this;
    }

    public function getTripFull(): ?bool
    {
        return $this->trip_full;
    }

    public function setTripFull(bool $trip_full): self
    {
        $this->trip_full = $trip_full;

        return $this;
    }

    public function getTripCompleted(): ?bool
    {
        return $this->trip_completed;
    }

    public function setTripCompleted(bool $trip_completed): self
    {
        $this->trip_completed = $trip_completed;

        return $this;
    }

    public function getDriver(): ?User
    {
        return $this->driver;
    }

    public function setDriver(?User $driver): self
    {
        $this->driver = $driver;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(string $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getDistance(): ?string
    {
        return $this->distance;
    }

    public function setDistance(string $distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    public function getStartTime(): ?\DateTimeInterface
    {
        return $this->startTime;
    }

    public function setStartTime(?\DateTimeInterface $startTime): self
    {
        $this->startTime = $startTime;

        return $this;
    }

    public function getTripStarted(): ?bool
    {
        return $this->tripStarted;
    }

    public function setTripStarted(?bool $tripStarted): self
    {
        $this->tripStarted = $tripStarted;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function jsonSerialize() {
        return [
            'id' => $this->getId(),
            'arrival' => $this->getArrival(),
            'departure' => $this->getDeparture(),
        ];
    }
}
