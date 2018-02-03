<?php

declare(strict_type=1);

use Behat\Behat\Context\Context;

class AddToWishlistContext implements Context
{
    /**
     * @When /^I add this product to the wish list$/
     */
    public function iAddThisProductToTheWishList()
    {
        throw new PendingException();
    }
}
