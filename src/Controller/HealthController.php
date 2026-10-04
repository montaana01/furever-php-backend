<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class HealthController extends AbstractController
{
    #[Route('/api/health', name: 'health', methods: ['GET'])]
    public function health(): JsonResponse
    {
        return $this->json(['success' => true, 'router' => 'Class attribute']);
    }

    public function yamlHealth(): JsonResponse
    {
        return $this->json(['success' => true, 'router' => 'router.yaml']);
    }

    public function phpHealth(): JsonResponse
    {
        return $this->json(['success' => true, 'router' => 'router.php']);
    }
}
