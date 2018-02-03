<?php

declare(strict_types=1);

namespace spec\SolutionDrive\SyliusWishlistPlugin\Entity;

use PhpSpec\ObjectBehavior;

use SolutionDrive\SyliusWishlistPlugin\Entity\WishlistInterface;
use SolutionDrive\SyliusWishlistPlugin\Entity\WishlistItem;
use SolutionDrive\SyliusWishlistPlugin\Entity\WishlistItemInterface;

use Sylius\Component\Core\Model\ProductInterface;

class WishlistItemSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(WishlistItem::class);
    }

    function it_implements_wishlist_item_interface()
    {
        $this->shouldImplement(WishlistItemInterface::class);
    }

    function it_has_product(ProductInterface $product)
    {
        $this->setProduct($product);
        $this->getProduct()->shouldReturn($product);
    }

    function it_has_created_at_date(\DateTime $dateTime)
    {
        $this->setCreatedAt($dateTime);
        $this->getCreatedAt()->shouldReturn($dateTime);
    }

    function it_has_updated_at_date(\DateTime $dateTime)
    {
        $this->setUpdatedAt($dateTime);
        $this->getUpdatedAt()->shouldReturn($dateTime);
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

    function it_has_wishlist(WishlistInterface $wishlist)
    {
        $this->setWishlist($wishlist);
        $this->getWishlist()->shouldReturn($wishlist);
    }
}
