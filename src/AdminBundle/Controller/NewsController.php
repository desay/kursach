<?php

namespace AdminBundle\Controller;

use AppBundle\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends Controller
{
    /**
     * @Route("/admin", name="admin_index")
     */
    public function indexAction()
    {
        $news = $this->getDoctrine()->getRepository('AppBundle:News')->findAll();

        return $this->render('@Admin/index.html.twig', array('news' => $news, 'isNews' => true));
    }

    /**
     * @Route("/admin/news/edit/{id}", name="admin_news_edit")
     */
    public function editAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $news = $this->getDoctrine()->getManager()->getRepository('AppBundle:News')->find($id);

        $form = $this->createFormBuilder($news)
            ->add('title', 'text')
            ->add('description', 'textarea')
            ->add('status', 'choice', array('choices'  => array('0' => 'ToDo', '1' => 'Complete')))
            ->add('date_create', 'date')
            ->add('save', 'submit', array('label' => 'Save'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $news = $form->getData();
            $news->setDateUpdate(new \DateTime());
            $em->persist($news);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_index'));
        }

        return $this->render('@Admin/News/edit.html.twig', array('form' => $form->createView(), 'news' => $news));
    }


    /**
     * @Route("/admin/news/add", name="admin_news_add")
     */
    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $news = new News();
        $form = $this->createFormBuilder($news)
            ->add('title', 'text')
            ->add('description', 'textarea')
            ->add('status', 'choice', array('choices'  => array('0' => 'ToDo', '1' => 'Complete')))
            ->add('date_create', 'date', array('required' => false, 'widget' => 'single_text'))
            ->add('save', 'submit', array('label' => 'Add'))
            ->getForm();

        $form->handleRequest($request);

        var_dump($form->getData()->getTitle());

        if ($form->isValid()) {
            /** @var News $news */
            $news = $form->getData();
            //$news->setDateCreate(new \DateTime());
            $news->setDateUpdate(new \DateTime());
            $news->setViews(0);
            $em->persist($news);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_index'));
        }

        return $this->render('@Admin/News/edit.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/admin/news/delete/{id}", name="admin_news_delete")
     */
    public function deleteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');

        if (is_null($id)) {
            return $this->redirect($this->generateUrl('admin_index'));
        }

        $news = $this->getDoctrine()->getManager()->getRepository('AppBundle:News')->find($id);
        if (is_null($news)) {
            return $this->redirect($this->generateUrl('admin_index'));
        }

        $em->remove($news);
        $em->flush();

        return $this->redirect($this->generateUrl('admin_index'));
    }
}