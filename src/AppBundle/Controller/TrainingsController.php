<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TrainingsController extends Controller
{
    /**
     * @Route("/trainings", name="trainings")
     */
    public function indexAction()
    {
        $trainings = $this->getDoctrine()->getRepository('AppBundle:Training')->findAll();

        return $this->render('@App/Trainings/trainings.html.twig', array('trainings' => $trainings));
    }

}
