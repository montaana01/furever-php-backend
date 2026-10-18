<?php

namespace App\Controller;

use App\Contract\MainPageInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainPageController extends AbstractController
{
    public function __construct(
        private readonly MainPageInterface $mainPage)
    {
    }

    #[Route('/')]
    public function mainPage(): Response
    {
        return $this->render('health/index.html.twig', $this->mainPage->getConfiguration());
    }
}
