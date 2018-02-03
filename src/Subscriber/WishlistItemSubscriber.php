<?php

declare(strict_types=1);

namespace SolutionDrive\SyliusWishlistPlugin\Subscriber;

use Doctrine\Common\Persistence\ObjectManager;
use SolutionDrive\SyliusWishlistPlugin\Entity\WishlistItemInterface;

/**
 * @todo: implement this in state manager if the state changed to 'bought'
 */
class WishlistItemSubscriber
{

    /**
     * @var ObjectManager
     */
    private $objectManager;

    public function __construct(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    public function onWishlistItemBought(WishlistItemInterface $wishlistItem)
    {
        // @todo: remove wishlist item from wishlist
        $this->objectManager->remove($wishlistItem);
        $this->objectManager->flush();
    }
}
