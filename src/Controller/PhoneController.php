<?php

namespace App\Controller;

use App\Repository\PhoneRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Uid\Uuid;

class PhoneController extends AbstractController
{
    public function __construct(PhoneRepository $phoneRepo)
    {
        $this->phoneRepo = $phoneRepo;
    }

    #[Route('/api/products', name: 'all_products')]
    public function allProducts(): Response
    {
        $phones = $this->phoneRepo->findAll();

        return $this->json($phones);
    }

    #[Route('/api/products/{uuid}', name: 'product_details')]
    public function productDetails(Uuid $uuid): Response
    {
        $phone = $this->phoneRepo->findOneBy(['uuid' => $uuid]);
        return $this->json($phone);
    }
}
