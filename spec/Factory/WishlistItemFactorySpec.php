<?php

declare(strict_types=1);

namespace spec\SolutionDrive\SyliusWishlistPlugin\Factory;

use PhpSpec\ObjectBehavior;

use SolutionDrive\SyliusWishlistPlugin\Factory\WishlistItemFactory;
use SolutionDrive\SyliusWishlistPlugin\Entity\WishlistItemInterface;

class WishlistItemFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(WishlistItemFactory::class);
    }

    function it_can_create_new_wishlist_item()
    {
        $this->createNew()->shouldReturnAnInstanceOf(WishlistItemInterface::class);
    }
}
