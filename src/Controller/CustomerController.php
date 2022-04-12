<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends AbstractController
{
    #[Route('/api/customers/{customerId}/users', name: 'customer_users')]
    public function customerUsers(): Response
    {
        return new Response("La liste de tous les utilisateurs d'un client");
    }

    #[Route('/api/customers/{customerId}/users/{userId}', name: 'user_details')]
    public function userDetails(): Response
    {
        return new Response("La liste de tous les utilisateurs d'un client");
    }
}
