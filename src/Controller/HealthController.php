<?php

namespace App\Controller;


use App\Service\HealthService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class HealthController extends AbstractController
{
    public function __construct(
        private readonly HealthService $healthService
    )
    {
    }

    public function __invoke(): JsonResponse
    {
        return $this->yamlHealth();
    }

    #[Route('/api/health', name: 'health', methods: ['GET'])]
    public function health(): JsonResponse
    {
        return $this->healthService->getStatus();
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
