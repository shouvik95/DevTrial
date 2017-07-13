<?php

namespace DbBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use DbBundle\Entity\Overall;
use DbBundle\Form\OverallType;

/**
 * Overall controller.
 *
 */
class OverallController extends Controller
{
    /**
     * Lists all Overall entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $overalls = $em->getRepository('DbBundle:Overall')->findAll();

        return $this->render('overall/index.html.twig', array(
            'overalls' => $overalls,
        ));
    }

    /**
     * Creates a new Overall entity.
     *
     */
    public function newAction(Request $request)
    {
        $overall = new Overall();
        $form = $this->createForm('DbBundle\Form\OverallType', $overall);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($overall);
            $em->flush();

            return $this->redirectToRoute('edit_show', array('id' => $overall->getDateId()));
        }

        return $this->render('overall/new.html.twig', array(
            'overall' => $overall,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Overall entity.
     *
     */
    public function showAction(Overall $overall)
    {
        $deleteForm = $this->createDeleteForm($overall);

        return $this->render('overall/show.html.twig', array(
            'overall' => $overall,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Overall entity.
     *
     */
    public function editAction(Request $request, Overall $overall)
    {
        $deleteForm = $this->createDeleteForm($overall);
        $editForm = $this->createForm('DbBundle\Form\OverallType', $overall);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($overall);
            $em->flush();

            return $this->redirectToRoute('edit_edit', array('id' => $overall->getDateId()));
        }

        return $this->render('overall/edit.html.twig', array(
            'overall' => $overall,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Overall entity.
     *
     */
    public function deleteAction(Request $request, Overall $overall)
    {
        $form = $this->createDeleteForm($overall);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($overall);
            $em->flush();
        }

        return $this->redirectToRoute('edit_index');
    }

    /**
     * Creates a form to delete a Overall entity.
     *
     * @param Overall $overall The Overall entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Overall $overall)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('edit_delete', array('id' => $overall->getDateId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
