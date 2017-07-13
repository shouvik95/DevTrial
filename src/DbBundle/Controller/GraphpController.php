<?php

namespace DbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class GraphpController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("SELECT a FROM  DbBundle:PStats a");
        $myArray = $query->getArrayResult();

        return $this->render('graphp/index.html.twig' , array('datajson'=>json_encode($myArray)));
    }
}
