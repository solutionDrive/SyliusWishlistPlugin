<?php

declare(strict_types=1);

namespace SolutionDrive\SyliusWishlistPlugin\Entity;

use Sylius\Component\Core\Model\CustomerInterface;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TimestampableInterface;
use Doctrine\Common\Collections\Collection;

interface WishlistInterface extends ResourceInterface, TimestampableInterface
{

    public function getCustomer(): CustomerInterface;

    public function setCustomer(CustomerInterface $customer): void;

    public function addWishlistItem(WishlistItemInterface $wishlistItem): void;

    public function getWishlistItems(): Collection;
}
