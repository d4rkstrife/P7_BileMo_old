<?php

namespace App\Controller;

use App\Repository\PhoneRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PhoneController extends AbstractController
{
    #[Route('/api/products', name: 'all_products')]
    public function allProducts(SerializerInterface $serializer, PhoneRepository $phoneRepo): Response
    {
        $phones = $phoneRepo->findAll();
        $serializedPhones = $serializer->serialize($phones,  'json');

        return new Response($serializedPhones);
    }

    #[Route('/api/products/{productId}', name: 'product_details')]
    public function productDetails(): Response
    {
        return new Response("Les détails d'un produit");
    }
}
