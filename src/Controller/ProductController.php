<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/api/products', name: 'all_products')]
    public function allProducts(): Response
    {
        return new Response('La liste de tous les produits');
    }

    #[Route('/api/products/{productId}', name: 'product_details')]
    public function productDetails(): Response
    {
        return new Response("Les détails d'un produit");
    }
}
