<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/login', name: 'user_login')]
    public function login(): Response
    {
        $apiVersion = 0;

        return new Response($apiVersion, Response::HTTP_NO_CONTENT);
    }
}