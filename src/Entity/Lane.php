<?php

namespace App\Entity;

use App\Repository\LaneRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LaneRepository::class)]
class Lane
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $lane_name = null;

    #[ORM\Column(length: 255)]
    private ?string $lane_description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLaneName(): ?string
    {
        return $this->lane_name;
    }

    public function setLaneName(string $lane_name): static
    {
        $this->lane_name = $lane_name;

        return $this;
    }

    public function getLaneDescription(): ?string
    {
        return $this->lane_description;
    }

    public function setLaneDescription(string $lane_description): static
    {
        $this->lane_description = $lane_description;

        return $this;
    }
}
