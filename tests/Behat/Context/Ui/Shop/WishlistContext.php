<?php
declare(strict_types=1);

namespace Tests\SolutionDrive\SyliusWishlistPlugin\Behat\Context\Ui\Shop;

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Sylius\Behat\Page\Shop\Product\ShowPageInterface;
use Sylius\Component\Core\Model\ProductInterface;

class WishlistContext implements Context
{
    /**
     * @var ShowPageInterface
     */
    private $productShowPage;

    /**
     * @param ShowPageInterface $productShowPage
     */
    public function __construct(ShowPageInterface $productShowPage)
    {
        $this->productShowPage = $productShowPage;
    }

    /**
     * @When /^I add (this product) to the wish list$/
     */
    public function iAddThisProductToTheWishList(ProductInterface $product)
    {
        $this->productShowPage->open(['slug' => $product->getSlug()]);
//        $this->productShowPage->addToWishlist();
        throw new PendingException();
    }

    /**
     * @When /^I go to the customer wish list page$/
     */
    public function iGoToTheCustomerWishListPage()
    {
        throw new PendingException();
    }

    /**
     * @Then /^I should be notified that the product has been successfully added to the wishlist$/
     */
    public function iShouldBeNotifiedThatTheProductHasBeenSuccessfullyAddedToTheWishlist()
    {
        throw new PendingException();
    }

    /**
     * @Given /^on the wishlist page I should see the product "([^"]*)"$/
     */
    public function onTheWishlistPageIShouldSeeTheProduct($arg1)
    {
        throw new PendingException();
    }
}
