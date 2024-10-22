<?php

namespace App\EventSubscriber;

use Symfony\Component\Console\Event\ConsoleErrorEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Listener Cree par défaut avec le commend
 *
 * bin/console make:subscriber
 *
 *
*/


/**
 * Liste des Evenement dans symfony
 *
 *1. Cycle de vie de la requête HTTP
 *
 * Ces événements sont liés au traitement des requêtes HTTP et à la gestion de la réponse.
 *
 * kernel.request
 * Déclenché avant que le contrôleur ne soit appelé. Il permet d'intercepter et de modifier la requête avant que le routage ne soit exécuté.
 *
 * kernel.controller
 * Déclenché juste avant que le contrôleur ne soit appelé. Il vous permet de modifier le contrôleur ou ses arguments.
 *
 * kernel.view
 * Déclenché lorsque le contrôleur retourne autre chose qu'un objet Response, comme un tableau ou une chaîne de caractères. Vous pouvez ici transformer ces données en une réponse HTTP.
 *
 * kernel.response
 * Déclenché juste avant que la réponse ne soit envoyée au client. Vous pouvez modifier la réponse à ce stade.
 *
 * kernel.exception
 * Déclenché lorsqu'une exception non gérée se produit. Il vous permet de transformer une exception en une réponse HTTP.
 *
 * kernel.terminate
 * Déclenché après que la réponse a été envoyée au client. Vous pouvez l'utiliser pour effectuer des tâches en arrière-plan.
 *
 * kernel.controller_arguments
 * Déclenché après la résolution des arguments du contrôleur et juste avant l'appel du contrôleur.
 *
 * 2. Événements de la Sécurité
 *
 * Les événements liés à la gestion de la sécurité et de l'authentification dans Symfony :
 *
 * security.authentication.success
 * Déclenché après une authentification réussie.
 *
 * security.authentication.failure
 * Déclenché après un échec d'authentification.
 *
 * security.interactive_login
 * Déclenché lorsque l'utilisateur est authentifié via une interface web interactive (formulaire de login).
 *
 * security.logout
 * Déclenché lorsque l'utilisateur se déconnecte.
 *
 * 3. Événements du Formulaire
 *
 * Ces événements sont liés au traitement des formulaires dans Symfony :
 *
 * form.pre_set_data
 * Déclenché avant que les données ne soient injectées dans un formulaire.
 *
 * form.post_set_data
 * Déclenché après que les données ont été injectées dans un formulaire.
 *
 * form.pre_submit
 * Déclenché avant que les données du formulaire ne soient soumises.
 *
 * form.post_submit
 * Déclenché après que les données du formulaire ont été soumises, mais avant que les erreurs ne soient validées.
 *
 * form.submit
 * Déclenché lors de la soumission du formulaire, après validation des données.
 *
 * 4. Événements liés à la Console
 *
 * Ces événements sont utilisés lors de l'exécution de commandes en ligne de commande (CLI) :
 *
 * console.command
 * Déclenché juste avant l'exécution d'une commande.
 *
 * console.terminate
 * Déclenché après l'exécution d'une commande, juste avant de quitter l'application console.
 *
 * console.error
 * Déclenché lorsqu'une erreur survient pendant l'exécution d'une commande.
 *
 * 5. Événements Doctrine (si vous utilisez Doctrine ORM)
 *
 * Symfony ne gère pas directement ces événements, mais ils sont souvent utilisés avec Symfony pour interagir avec Doctrine (ORM utilisé pour la gestion de base de données) :
 *
 * prePersist
 * Déclenché avant que l'entité ne soit persistée en base de données.
 *
 * postPersist
 * Déclenché après que l'entité a été persistée.
 *
 * preUpdate
 * Déclenché avant la mise à jour d'une entité.
 *
 * postUpdate
 * Déclenché après la mise à jour d'une entité.
 *
 * preRemove
 * Déclenché avant la suppression d'une entité.
 *
 * postRemove
 * Déclenché après la suppression d'une entité.
 *
 */
class TestSubscriber implements EventSubscriberInterface
{
    public function onConsoleErrorEvent(ConsoleErrorEvent $event): void
    {
        // logique ...
    }

    public static function getSubscribedEvents(): array
    {

        return [
            ConsoleErrorEvent::class => 'onConsoleErrorEvent',
        ];
    }
}
