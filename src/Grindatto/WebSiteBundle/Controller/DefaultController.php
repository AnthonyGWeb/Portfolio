<?php

namespace Grindatto\WebSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function homeAction()
    {
        return $this->render('GrindattoWebSiteBundle:accueil:accueil.html.twig');
    }

    public function cvAction()
    {
    	$formationRepository = $this
    		->getDoctrine()
    		->getRepository('GrindattoWebSiteBundle:Formation');
    	$formations = $formationRepository->findBy(
            array(
                'visibility' => '1',
            ),
            array(
                'ordre' => 'ASC',
            )
        );

        return $this->render('GrindattoWebSiteBundle:cv:cv.html.twig', array(
        	'formations' => $formations,
        ));
    }
}
