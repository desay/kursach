<?php

namespace Prophetz\UserBundle\Handler;

use FOS\UserBundle\Doctrine\UserManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Router;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;

class AuthenticationHandler implements AuthenticationSuccessHandlerInterface, AuthenticationFailureHandlerInterface, LogoutSuccessHandlerInterface
{
    protected $router;
    protected $security;
    protected $userManager;
    protected $container;

    /**
     * @param RouterInterface $router
     * @param SecurityContext $security
     * @param $userManager UserManager
     * @param $container ContainerInterface
     */
    public function __construct(RouterInterface $router, SecurityContext $security, $userManager, $container)
    {
        $this->router = $router;
        $this->security = $security;
        $this->userManager = $userManager;
        $this->container = $container;

    }
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        if ($request->isXmlHttpRequest()) {
            $user = $this->security->getToken()->getUser()->getInfo();
            $result = array('success' => true, 'user' => $user);

            return new JsonResponse($result);
        } else {

            return new Response('');
        }
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        if ($request->isXmlHttpRequest()) {
            $result = array('success' => false, 'message' => $exception->getMessage());

            return new JsonResponse($result);
        } else {

            return new Response('');
        }
    }

    public function onLogoutSuccess(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $result = array('success' => true);

            return new JsonResponse($result);
        } else {

            return new Response('');
        }
    }
}