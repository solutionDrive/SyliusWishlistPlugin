<?php
declare(strict_types=1);

namespace Tests\SolutionDrive\SyliusWishlistPlugin\Behat\Context\Ui\Shop;

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Sylius\Behat\Page\Shop\Product\ShowPageInterface;
use Sylius\Component\Core\Model\ProductInterface;
use Tests\SolutionDrive\SyliusWishlistPlugin\Behat\Page\Shop\Product\ShowPage;

class WishlistContext implements Context
{
    /**
     * @var ShowPage
     */
    private $productShowPage;

    /**
     * @param ShowPage $productShowPage
     */
    public function __construct(ShowPage $productShowPage)
    {
        $this->productShowPage = $productShowPage;
    }

    /**
     * @When /^I add (this product) to the wish list$/
     */
    public function iAddThisProductToTheWishList(ProductInterface $product)
    {
        $this->productShowPage->open(['slug' => $product->getSlug()]);
        $this->productShowPage->addToWishlist();
    }

    /**
     * @Then I should be notified that the product has been successfully added to the wishlist
     */
    public function iShouldBeNotifiedThatTheProductHasBeenSuccessfullyAddedToTheWishlist()
    {
        throw new PendingException();
    }

    /**
     * @Then /^on the wishlist page I should see the product "([^"]*)"$/
     */
    public function onTheWishlistPageIShouldSeeTheProduct($arg1)
    {
        throw new PendingException();
    }
}
