<?php

declare(strict_types=1);

namespace SolutionDrive\SyliusWishlistPlugin\Repository;

use Doctrine\ORM\EntityRepository;
use Sylius\Component\Core\Model\CustomerInterface;

class WishlistRepository extends EntityRepository
{
    public function findWishlistItemsByUser(CustomerInterface $customer): array
    {
        return $this->findBy([
            'customer' => $customer
        ]);
    }
}
