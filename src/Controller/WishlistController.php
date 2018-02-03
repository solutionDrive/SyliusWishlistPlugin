<?php

declare(strict_types=1);

namespace Solutiondrive\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WishlistController extends Controller
{

    public function addToWishList(Request $request)
    {
        $referer = $request->headers->get('referer');

        $this->addFlash('success', 'Added product to wishlist');
        $this->redirect($referer);
    }
}
