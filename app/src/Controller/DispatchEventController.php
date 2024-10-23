<?php
declare(strict_types=1);

namespace App\Controller;


use App\Event\MyCustomEvent;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Routing\Attribute\Route;

class DispatchEventController extends AbstractController
{
    #[Route('/dispatch_event', name: 'dispatch_event')]
    public function __invoke(
        EventDispatcherInterface $eventDispatcher,
        Request                  $request
    ): Response{
        $data = 'Hello, this is my event data!';
        $event = new MyCustomEvent($data, $request); // Créer un nouvel événement avec ces données
        $eventDispatcher->dispatch($event, MyCustomEvent::NAME);// Déclencher l'événement

        return $this->json(['status' => 'Event dispatched!']);
    }
}
