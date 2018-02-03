<?php

declare(strict_types=1);

namespace SolutionDrive\SyliusWishlistPlugin\Entity;

use Sylius\Component\Core\Model\ProductInterface;

class WishlistItem implements WishlistItemInterface
{

    const STATE_NEW = 'new';
    const STATE_BOUGHT = 'bought';

    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTimeInterface
     */
    private $createdAt;

    /**
     * @var \DateTimeInterface
     */
    private $updatedAt;

    /**
     * @var ProductInterface
     */
    private $product;

    /**
     * @var string
     */
    private $state = self::STATE_NEW;

    public function getId(): int
    {
        return $this->id;
    }

    public function getProduct(): ProductInterface
    {
        return $this->product;
    }

    public function setProduct(ProductInterface $product): void
    {
        $this->product = $product;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }
}
