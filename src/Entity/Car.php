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
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     *
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $model;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $brand;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $startProductionDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @var \DateTime|null
     */
    private $endProductionDate;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Car
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getModel(): ?string
    {
        return $this->model;
    }

    /**
     * @param string $model
     *
     * @return Car
     */
    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    /**
     * @return string
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     *
     * @return Car
     */
    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartProductionDate(): ?\DateTime
    {
        return $this->startProductionDate;
    }

    /**
     * @param \DateTime $startProductionDate
     *
     * @return Car
     */
    public function setStartProductionDate(\DateTime $startProductionDate): self
    {
        $this->startProductionDate = $startProductionDate;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getEndProductionDate(): ?\DateTime
    {
        return $this->endProductionDate;
    }

    /**
     * @param \DateTime|null $endProductionDate
     *
     * @return Car
     */
    public function setEndProductionDate(?\DateTime $endProductionDate): self
    {
        $this->endProductionDate = $endProductionDate;

        return $this;
    }
}
