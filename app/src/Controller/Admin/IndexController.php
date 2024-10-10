<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\SecurityBundle\Security;

class IndexController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    public function index(Security $security): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $this->isGranted('ROLE_USER');
        return $this->render('Admin/index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
