<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api', name: 'api_')]
class StatusController extends AbstractController
{
    #[Route('/status', name: 'status', methods: ['GET'])]
    public function login(): JsonResponse
    {
        $data = [
            'version' => $_ENV['API_VERSION'],
        ];
        return new JsonResponse($data, Response::HTTP_OK);
    }
}