<?php

namespace App\Controller;

use App\Contract\HealthServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HealthController extends AbstractController
{
    private int $number = 10;
    public function __construct(
        private readonly HealthServiceInterface $healthService,
    ) {
    }

    public function __invoke(): JsonResponse
    {
        return $this->yamlHealth();
    }

    #[Route('/api/health', name: 'health', methods: ['GET'])]
    public function health(): JsonResponse
    {
        return $this->json(
            $this->healthService->getStatus()
        );
    }

    public function yamlHealth(): JsonResponse
    {
        return $this->json(['success' => true, 'router' => 'router.yaml']);
    }

    public function phpHealth(): JsonResponse
    {
        return $this->json(['success' => true, 'router' => 'router.php']);
    }

    #[Route('/')]
    public function homepage(): Response
    {
        return $this->render('health/index.html.twig', ['number' => $this->number]);
    }
}
