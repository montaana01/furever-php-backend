<?php

namespace App\Service;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
final class HealthService extends AbstractController
{
    public function getStatus(): JsonResponse
    {
        return $this->json([
            'status' => 200,
            'service' => 'ecommerce-api',
        ]);
    }
}
