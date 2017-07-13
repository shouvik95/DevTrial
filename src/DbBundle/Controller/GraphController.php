<?php

namespace DbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class GraphController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("SELECT a FROM  DbBundle:TStats a");
        $myArray = $query->getArrayResult();

        return $this->render('graph/index.html.twig' , array('datajson'=>json_encode($myArray)));
    }
}
