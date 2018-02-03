<?php

namespace spec\SolutionDrive\SyliusWishlistPlugin\Entity;

use Prophecy\Argument;
use PhpSpec\ObjectBehavior;

use SolutionDrive\SyliusWishlistPlugin\Entity\WishlistItem;
use SolutionDrive\SyliusWishlistPlugin\Entity\WishlistItemInterface;

use Sylius\Component\Core\Model\ProductInterface;

class WishlistItemSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(WishlistItem::class);
    }

    function it_should_implement_wishlist_item_interface()
    {
        $this->shouldImplement(WishlistItemInterface::class);
    }

    function it_has_product(
        ProductInterface $product
    )
    {
        $this->setProduct($product);
        $this->getProduct()->shouldReturn($product);
    }

    function it_has_creation_date(
        \DateTime $dateTime
    )
    {
        $this->setCreationDate($dateTime);
        $this->getCreationDate()->shouldReturn($dateTime);
    }

    function it_has_default_state_new()
    {
        $this->getState()->shouldReturn('new');
    }

    function it_has_state()
    {
        $this->setState('new_state');
        $this->getState()->shouldReturn('new_state');
    }
}
