<?php

namespace App\Controller\Site;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NewCarsController extends AbstractController
{
    #[Route('/new/cars', name: 'app_new_cars')]
    public function index(): Response
    {
        return $this->render('Site/new_cars/new_cars.html.twig', []);
    }
}
