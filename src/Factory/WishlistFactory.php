<?php

declare(strict_types=1);

namespace SolutionDrive\SyliusWishlistPlugin\Factory;

use SolutionDrive\SyliusWishlistPlugin\Entity\Wishlist;
use SolutionDrive\SyliusWishlistPlugin\Entity\WishlistInterface;
use Sylius\Component\Resource\Factory\FactoryInterface;

class WishlistFactory implements FactoryInterface
{
    public function createNew(): WishlistInterface
    {
        return new Wishlist();
    }
}
