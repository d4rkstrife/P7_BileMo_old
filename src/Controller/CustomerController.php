<?php

namespace App\Controller;

use Symfony\Component\Uid\Uuid;
use App\Repository\CustomerRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CustomerController extends AbstractController
{
    #[Route('/api/customers/', name: 'customers')]
    public function readAll(SerializerInterface $serializer, CustomerRepository $customerRepo): Response
    {
        $customers = $customerRepo->findAll();
        dd($this->json($customers));
        return $this->json($customers);
    }

    #[Route('/api/customers/{uuid}', name: 'user_details')]
    public function readItem(Uuid $uuid, CustomerRepository $customerRepo): Response
    {

        $customer = $customerRepo->findOneBy(['uuid' => $uuid]);

        return $this->json($customer);
    }
}
