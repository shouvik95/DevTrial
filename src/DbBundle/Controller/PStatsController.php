<?php

namespace DbBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use DbBundle\Entity\PStats;
use DbBundle\Form\PStatsType;

/**
 * PStats controller.
 *
 */
class PStatsController extends Controller
{
    /**
     * Lists all PStats entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pStats = $em->getRepository('DbBundle:PStats')->findAll();

        return $this->render('pstats/index.html.twig', array(
            'pStats' => $pStats,
        ));
    }

    /**
     * Creates a new PStats entity.
     *
     */
    public function newAction(Request $request)
    {
        $pStat = new PStats();
        $form = $this->createForm('DbBundle\Form\PStatsType', $pStat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pStat);
            $em->flush();

            return $this->redirectToRoute('edit1_show', array('id' => $pStat->getPId()));
        }

        return $this->render('pstats/new.html.twig', array(
            'pStat' => $pStat,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PStats entity.
     *
     */
    public function showAction(PStats $pStat)
    {
        $deleteForm = $this->createDeleteForm($pStat);

        return $this->render('pstats/show.html.twig', array(
            'pStat' => $pStat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing PStats entity.
     *
     */
    public function editAction(Request $request, PStats $pStat)
    {
        $deleteForm = $this->createDeleteForm($pStat);
        $editForm = $this->createForm('DbBundle\Form\PStatsType', $pStat);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pStat);
            $em->flush();

            return $this->redirectToRoute('edit1_edit', array('id' => $pStat->getPId()));
        }

        return $this->render('pstats/edit.html.twig', array(
            'pStat' => $pStat,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a PStats entity.
     *
     */
    public function deleteAction(Request $request, PStats $pStat)
    {
        $form = $this->createDeleteForm($pStat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pStat);
            $em->flush();
        }

        return $this->redirectToRoute('edit1_index');
    }

    /**
     * Creates a form to delete a PStats entity.
     *
     * @param PStats $pStat The PStats entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PStats $pStat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('edit1_delete', array('id' => $pStat->getPId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
