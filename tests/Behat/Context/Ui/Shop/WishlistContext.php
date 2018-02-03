<?php
declare(strict_types=1);

namespace Tests\SolutionDrive\SyliusWishlistPlugin\Behat\Context\Ui\Shop;

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Sylius\Behat\Service\NotificationCheckerInterface;
use Sylius\Component\Core\Model\ProductInterface;
use Tests\SolutionDrive\SyliusWishlistPlugin\Behat\Page\Shop\Product\ShowPage;

class WishlistContext implements Context
{
    /**
     * @var ShowPage
     */
    private $productShowPage;

    /**
     * @var NotificationCheckerInterface
     */
    private $notificationChecker;

    /**
     * @param ShowPage                     $productShowPage
     * @param NotificationCheckerInterface $notificationChecker
     */
    public function __construct(ShowPage $productShowPage, NotificationCheckerInterface $notificationChecker)
    {
        $this->productShowPage = $productShowPage;
        $this->notificationChecker = $notificationChecker;
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
        $this->notificationChecker->checkNotification('Item has been added to cart', NotificationType::success());
    }

    /**
     * @Then on the wishlist page I should see the product :product
     */
    public function onTheWishlistPageIShouldSeeTheProduct(ProductInterface $product)
    {
        throw new PendingException();
    }
}
