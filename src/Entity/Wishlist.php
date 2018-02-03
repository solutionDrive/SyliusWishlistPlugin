<?php

declare(strict_types=1);

namespace SolutionDrive\SyliusWishlistPlugin\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Sylius\Component\Core\Model\CustomerInterface;

class Wishlist implements WishlistInterface
{

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
     * @var CustomerInterface
     */
    private $customer;

    /**
     * @var Collection
     */
    private $wishlistItems;

    public function __construct()
    {
        $this->wishlistItems = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCustomer(): CustomerInterface
    {
        return $this->customer;
    }

    public function setCustomer(CustomerInterface $customer): void
    {
        $this->customer = $customer;
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

    public function getWishlistItems(): Collection
    {
        return $this->wishlistItems;
    }

    public function addWishlistItem(WishlistItemInterface $wishlistItem): void
    {
        $this->wishlistItems[] = $wishlistItem;
    }
}
