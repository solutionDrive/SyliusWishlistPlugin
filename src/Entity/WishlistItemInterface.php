<?php

declare(strict_types=1);

namespace SolutionDrive\SyliusWishlistPlugin\Entity;

use Sylius\Component\Core\Model\ProductInterface;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TimestampableInterface;

interface WishlistItemInterface extends ResourceInterface, TimestampableInterface
{

    public function getProduct(): ProductInterface;

    public function setProduct(ProductInterface $state): void;

    public function getState(): string;

    public function setState(string $state): void;

    public function setWishlist(WishlistInterface $wishlist): void;

    public function getWishlist(): WishlistInterface;
}
