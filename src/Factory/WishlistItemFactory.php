<?php

declare(strict_types=1);

namespace SolutionDrive\SyliusWishlistPlugin\Factory;

use Sylius\Component\Resource\Factory\FactoryInterface;
use SolutionDrive\SyliusWishlistPlugin\Entity\WishlistItem;
use SolutionDrive\SyliusWishlistPlugin\Entity\WishlistItemInterface;

class WishlistItemFactory implements FactoryInterface
{
    public function createNew(): WishlistItemInterface
    {
        return new WishlistItem();
    }
}
