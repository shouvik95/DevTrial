<?php

namespace DbBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use DbBundle\Entity\TStats;
use DbBundle\Form\TStatsType;

/**
 * TStats controller.
 *
 */
class TStatsController extends Controller
{
    /**
     * Lists all TStats entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tStats = $em->getRepository('DbBundle:TStats')->findAll();

        return $this->render('tstats/index.html.twig', array(
            'tStats' => $tStats,
        ));
    }

    /**
     * Creates a new TStats entity.
     *
     */
    public function newAction(Request $request)
    {
        $tStat = new TStats();
        $form = $this->createForm('DbBundle\Form\TStatsType', $tStat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tStat);
            $em->flush();

            return $this->redirectToRoute('edit2_show', array('id' => $tStat->getTId()));
        }

        return $this->render('tstats/new.html.twig', array(
            'tStat' => $tStat,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TStats entity.
     *
     */
    public function showAction(TStats $tStat)
    {
        $deleteForm = $this->createDeleteForm($tStat);

        return $this->render('tstats/show.html.twig', array(
            'tStat' => $tStat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TStats entity.
     *
     */
    public function editAction(Request $request, TStats $tStat)
    {
        $deleteForm = $this->createDeleteForm($tStat);
        $editForm = $this->createForm('DbBundle\Form\TStatsType', $tStat);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tStat);
            $em->flush();

            return $this->redirectToRoute('edit2_edit', array('id' => $tStat->getTId()));
        }

        return $this->render('tstats/edit.html.twig', array(
            'tStat' => $tStat,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TStats entity.
     *
     */
    public function deleteAction(Request $request, TStats $tStat)
    {
        $form = $this->createDeleteForm($tStat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tStat);
            $em->flush();
        }

        return $this->redirectToRoute('edit2_index');
    }

    /**
     * Creates a form to delete a TStats entity.
     *
     * @param TStats $tStat The TStats entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TStats $tStat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('edit2_delete', array('id' => $tStat->getTId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
