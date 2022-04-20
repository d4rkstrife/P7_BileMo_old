<?php

namespace App\Controller;

use App\Repository\CustomerRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CustomerController extends AbstractController
{
    #[Route('/api/customers/', name: 'customers')]
    public function customerUsers(SerializerInterface $serializer, CustomerRepository $customerRepo): Response
    {
        $users = $customerRepo->findAll();
        $serializedUsers = $serializer->serialize($users,  'json');

        return new Response($serializedUsers);
    }

    #[Route('/api/customers/{customerId}/users/{userId}', name: 'user_details')]
    public function userDetails(): Response
    {
        return new Response("La liste de tous les utilisateurs d'un client");
    }
}
