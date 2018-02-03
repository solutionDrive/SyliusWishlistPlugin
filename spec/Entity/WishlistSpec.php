<?php

declare(strict_types=1);

namespace spec\SolutionDrive\SyliusWishlistPlugin\Entity;

use PhpSpec\ObjectBehavior;

use Sylius\Component\Core\Model\CustomerInterface;

use SolutionDrive\SyliusWishlistPlugin\Entity\Wishlist;
use SolutionDrive\SyliusWishlistPlugin\Entity\WishlistInterface;

class WishlistSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Wishlist::class);
    }

    function it_implements_wishlist_interface()
    {
        $this->shouldImplement(WishlistInterface::class);
    }

    function it_has_customer(CustomerInterface $customer)
    {
        $this->setCustomer($customer);
        $this->getCustomer()->shouldReturn($customer);
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
}
