<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BarcodeTestingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=BarcodeTestingRepository::class)
 */
class BarcodeTesting
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
    private $barcodeValue;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBarcodeValue(): ?string
    {
        return $this->barcodeValue;
    }

    public function setBarcodeValue(string $barcodeValue): self
    {
        $this->barcodeValue = $barcodeValue;

        return $this;
    }
}
