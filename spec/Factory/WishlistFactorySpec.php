<?php

declare(strict_types=1);

namespace spec\SolutionDrive\SyliusWishlistPlugin\Factory;

use PhpSpec\ObjectBehavior;

use SolutionDrive\SyliusWishlistPlugin\Entity\WishlistInterface;
use SolutionDrive\SyliusWishlistPlugin\Factory\WishlistFactory;

class WishlistFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(WishlistFactory::class);
    }

    function it_can_create_new_wishlist()
    {
        $this->createNew()->shouldReturnAnInstanceOf(WishlistInterface::class);
    }
}
