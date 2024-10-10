<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(
        AuthenticationUtils $authenticationUtils,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager

    ): Response
    {
        /**
         * "#############################################################
         * une methode bizarre pour ajouter le 1er user
         */
//        $user = new User();
//        $user = $user->setUsername('w.khelfi')
//            ->setEmail('khelifiwaleed@gmail.com')
//            ->setPassword($passwordHasher->hashPassword($user, '6626'))
//            ->setRoles(['ROLE_USER']);
//        $entityManager->persist($user);
//        $entityManager->flush();
        /**
         * ################################################################
         */

        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('Admin/login/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        //throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
