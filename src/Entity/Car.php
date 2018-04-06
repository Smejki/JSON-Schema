<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CarRepository")
 */
class Car
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $model;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $brand;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startProductionDate;

    /**
     * @ORM\Column(type="datetime" nullable="true")
     */
    private $endProductionDate;

    /**
     * @return null|string
     */
    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

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

    public function getStartProductionDate(): ?\DateTimeInterface
    {
        return $this->startProductionDate;
    }

    public function setStartProductionDate(\DateTimeInterface $startProductionDate): self
    {
        $this->startProductionDate = $startProductionDate;

        return $this;
    }

    public function getEndProductionDate(): ?\DateTimeInterface
    {
        return $this->endProductionDate;
    }

    public function setEndProductionDate(?\DateTimeInterface $endProductionDate): self
    {
        $this->endProductionDate = $endProductionDate;

        return $this;
    }
}
