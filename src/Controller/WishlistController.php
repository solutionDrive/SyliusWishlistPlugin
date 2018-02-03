<?php
declare(strict_types=1);

namespace SolutionDrive\SyliusWishlistPlugin\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WishlistController extends Controller
{
    /**
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function addToWishListAction(Request $request)
    {
        $referer = $request->headers->get('referer');

        $this->addFlash('success', 'Item has been added to wishlist');
        return $this->redirect($referer);
    }
}
