<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        $news = $this->getDoctrine()->getRepository('AppBundle:News')
            ->createQueryBuilder('n')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult()
        ;

        return $this->render('@App/index.html.twig', array('news' => $news));
    }

    /**
     * @Route("/loginForm.html", name="index_login_form")
     */
    public function loginFormAction()
    {
        return $this->render('@App/Main/loginForm.html.twig', array());
    }

    /**
     * @Route("/registrationForm.html", name="index_register_form")
     */
    public function registerFormAction()
    {
        $formFactory = $this->get('fos_user.registration.form.factory');
        $form = $formFactory->createForm();
        $form = $form->createView();

        return $this->render('@App/Main/registrationForm.html.twig', array('form' => $form));
    }
}
