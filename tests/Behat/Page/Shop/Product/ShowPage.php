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

use Sylius\Behat\Page\Shop\Product\ShowPage as BasePage;

class ShowPage extends BasePage
{
    public function addToWishlist()
    {
        $this->getDocument()->pressButton('Add to wishlist');
    }
}
