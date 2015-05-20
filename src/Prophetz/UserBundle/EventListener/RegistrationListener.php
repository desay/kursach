<?php

namespace Prophetz\UserBundle\EventListener;

use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Prophetz\UserBundle\Entity\User;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class RegistrationListener implements EventSubscriberInterface
{
    private $router;

    public function __construct(UrlGeneratorInterface $router)
    {
        $this->router = $router;
    }

    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::REGISTRATION_COMPLETED => 'onRegistrationCompleted',
            FOSUserEvents::REGISTRATION_SUCCESS => 'onRegistrationSuccess',
        );
    }

    public function onRegistrationCompleted(FilterUserResponseEvent $event)
    {
        /** @var User $user */
        $user = $event->getUser();
        $info = $user->getInfo();
        $response = new JsonResponse(array('success' => true, 'user' => $info));
        $response->send();
    }

    public function onRegistrationSuccess(FormEvent $event)
    {
        $event->setResponse(new Response());
    }
}
