<?php

namespace App\Controller;

use App\Repository\CarDetailsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Helper\ObjectToArrayHelper;

class NewsCarController extends AbstractController
{

    public function __invoke(
        CarDetailsRepository $carDetailsRepository
    ): JsonResponse
    {
        $carDetails = $carDetailsRepository->findOneBy([],['id' => 'DESC']);
        $carDetails = ObjectToArrayHelper::filterNews($carDetails);
        return $this->json($carDetails);
    }
}
