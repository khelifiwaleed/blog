<?php

namespace App\EventListener;

use App\Event\MyCustomEvent;


/**
 * Evenement cree manuellement (Créer un Écouteur d'Événement MyCustomEvent.php)
 */


class MyEventListener
{
    public function onMyCustomEvent(MyCustomEvent $event): void
    {
        // logique
    }
}