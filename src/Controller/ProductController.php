<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/api/products', name: 'all_products')]
    public function allProducts(): Response
    {

        return new Response('toto');
    }

    #[Route('/api/products/{productId}', name: 'product_details')]
    public function productDetails(): Response
    {
        return new Response("Les détails d'un produit");
    }
}
