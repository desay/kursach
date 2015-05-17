<?php

namespace AdminBundle\Controller;

use AppBundle\Entity\News;
use AppBundle\Entity\Training;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TrainingsController extends Controller
{
    /**
     * @Route("/admin/trainings", name="admin_index_trainings")
     */
    public function indexAction()
    {
        $trainings = $this->getDoctrine()->getRepository('AppBundle:Training')->findAll();

        return $this->render('@Admin/trainings.html.twig', array('trainings' => $trainings));
    }

    /**
     * @Route("/admin/trainings/edit/{id}", name="admin_trainings_edit")
     */
    public function editAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $training = $this->getDoctrine()->getManager()->getRepository('AppBundle:Training')->find($id);

        $form = $this->createFormBuilder($training)
            ->add('title', 'text')
            ->add('description', 'textarea')
            ->add('price', 'text')
            ->add('save', 'submit', array('label' => 'Save'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $training = $form->getData();
            $training->setDateUpdate(new \DateTime());
            $em->persist($training);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_index_trainings'));
        }

        return $this->render('@Admin/Trainings/edit.html.twig', array('form' => $form->createView(), 'training' => $training));
    }


    /**
     * @Route("/admin/trainings/add", name="admin_trainings_add")
     */
    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $training = new Training();
        $form = $this->createFormBuilder($training)
            ->add('title', 'text')
            ->add('description', 'textarea')
            ->add('price', 'text')
            ->add('save', 'submit', array('label' => 'Save'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            /** @var News $news */
            $training = $form->getData();
            $training->setDateCreate(new \DateTime());
            $training->setDateUpdate(new \DateTime());
            $em->persist($training);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_index_trainings'));
        }

        return $this->render('@Admin/Trainings/edit.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/admin/trainings/delete/{id}", name="admin_trainings_delete")
     */
    public function deleteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');

        if (is_null($id)) {
            return $this->redirect($this->generateUrl('admin_index_trainings'));
        }

        $training = $this->getDoctrine()->getManager()->getRepository('AppBundle:Training')->find($id);
        if (is_null($training)) {
            return $this->redirect($this->generateUrl('admin_index_trainings'));
        }

        $em->remove($training);
        $em->flush();
        
        return $this->redirect($this->generateUrl('admin_index_trainings'));
    }
}
