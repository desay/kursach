<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use AppBundle\Entity\News;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
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
     * @Route("/getNewsLength", name="get_news_length")
     */
    public function getNewsLength()
    {
        $news = $this->getDoctrine()->getRepository('AppBundle:News')
            ->createQueryBuilder('n')
            ->select("count(n)")
            ->getQuery()
            ->getSingleScalarResult();

        return new JsonResponse(array('count' => $news));
    }

    /**
     * @Route("/getNews", name="get_news")
     */
    public function getNewsAction(Request $request)
    {
        $limit = $request->get('limit');
        $offset = $request->get('offset');

        $news = $this->getDoctrine()->getRepository('AppBundle:News')
            ->createQueryBuilder('n')
            ->setFirstResult($offset)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult()
        ;
        $data = [];

        /** @var News $entry */
        foreach ($news as $entry) {

            $data[] = array(
                'id' => $entry->getId(),
                'title' => $entry->getTitle(),
                'description' => $entry->getDescription(),
                'date_create' => $entry->getDateCreate()->format('Y-m-d H:i:s'),
                'date_update' => $entry->getDateUpdate()->format('Y-m-d H:i:s'),
                'views' => $entry->getViews(),
                'image' => $entry->getImage()
            );

        }

        return new JsonResponse($data);
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

        $comment = new Comment();
        $commentForm = $this->createFormBuilder($comment)
            ->add('text', 'textarea', array('label' => 'Комментарий'))
            ->add('save', 'submit', array('label' => 'Add'))
            ->getForm();

        $commentForm->handleRequest($request);

        if ($commentForm->isValid()) {

            /** @var Comment $comment */
            $comment = $commentForm->getData();
            $comment->setNews($news);
            $comment->setDateCreate(new \DateTime());
            $comment->setDateUpdate(new \DateTime());
            $comment->setUser($this->getUser());

            $em->persist($comment);
            $em->flush();

            $commentForm = $this->createFormBuilder(new Comment())
                ->add('text', 'textarea', array('label' => 'Комментарий'))
                ->add('save', 'submit', array('label' => 'Add'))
                ->getForm();
        }

        return $this->render('@App/News/item.html.twig', array('news' => $news, 'commentForm' => $commentForm->createView()));
    }
}
