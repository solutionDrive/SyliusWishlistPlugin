<?php
declare(strict_types=1);

/**
 * Created by solutionDrive GmbH.
 *
 * @author: Tobias Wojtylak <tw@solutiondrive.de>
 * @date: 03.02.18
 * @time: 12:57
 * @copyright: 2018 solutionDrive GmbH
 */

namespace Tests\SolutionDrive\SyliusWishlistPlugin\Behat\Page\Shop\Product;

use Behat\Mink\Driver\Selenium2Driver;
use Sylius\Behat\Page\Shop\Product\ShowPage as BasePage;
use Sylius\Behat\Service\JQueryHelper;

class ShowPage extends BasePage
{
    public function addToWishlist() {

        $this->getDocument()->pressButton('Add to wishlist');

        if ($this->getDriver() instanceof Selenium2Driver) {
            JQueryHelper::waitForAsynchronousActionsToFinish($this->getSession());
        }
    }
}
