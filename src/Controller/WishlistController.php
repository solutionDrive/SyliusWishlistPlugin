<?php
declare(strict_types=1);

namespace SolutionDrive\SyliusWishlistPlugin\Controller;

use Sylius\Component\Core\Repository\ProductRepositoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class WishlistController extends Controller
{
    /**
     * @param int     $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function addToWishListAction(int $id, Request $request)
    {
        $referer = $request->headers->get('referer');

        /** @var ProductRepositoryInterface $productRepository */
        $productRepository = $this->get('sylius.repository.product');
        $product = $productRepository->find($id);

        $this->addFlash('success', 'Item has been added to wishlist');
        return $this->redirect($referer);
    }
}
