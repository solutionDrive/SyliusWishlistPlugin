<?php

namespace spec\SolutionDrive\SyliusWishlistPlugin\Entity;

use Prophecy\Argument;
use PhpSpec\ObjectBehavior;

use Sylius\Component\Core\Model\Customer;

use SolutionDrive\SyliusWishlistPlugin\Entity\Wishlist;
use SolutionDrive\SyliusWishlistPlugin\Entity\WishlistInterface;

class WishlistSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Wishlist::class);
    }

    function it_should_implement_wishlist_interface()
    {
        $this->shouldImplement(WishlistInterface::class);
    }

    function it_has_customer(
        Customer $customer
    )
    {
        $this->setCustomer($customer);
        $this->getCustomer()->shouldReturn($customer);
    }

    function it_has_creation_date(
        \DateTime $dateTime
    )
    {
        $this->setCreationDate($dateTime);
        $this->getCreationDate()->shouldReturn($dateTime);
    }

    function it_has_last_updated_date(
        \DateTime $dateTime
    )
    {
        $this->setLastUpdatedDate($dateTime);
        $this->getLastUpdatedDate()->shouldReturn($dateTime);
    }
}
