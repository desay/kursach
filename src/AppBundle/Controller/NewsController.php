<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends Controller
{
    /**
     * @Route("/news", name="news")
     */
    public function indexAction()
    {
        $news = $this->getDoctrine()->getRepository('AppBundle:News')->findAll();

        return $this->render('@App/News/news.html.twig', array('news' => $news));
    }

    /**
     * @Route("/news/{id}", name="news_item")
     */
    public function newsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');

        if (is_null($id)) {
            return new Response('Unknown id');
        }

        $news = $this->getDoctrine()->getRepository('AppBundle:News')->find($id);

        if (is_null($news)) {
            return new Response('Unknown id');
        }

        $news->setViews($news->getViews()+1);
        $em->persist($news);
        $em->flush();

        return $this->render('@App/News/item.html.twig', array('news' => $news));
    }
}
