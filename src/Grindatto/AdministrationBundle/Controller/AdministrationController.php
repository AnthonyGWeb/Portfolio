<?php

namespace Grindatto\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Grindatto\WebSiteBundle\Entity\Formation;
use Grindatto\WebSiteBundle\Form\FormationType;

class AdministrationController extends Controller
{
    public function homeAction()
    {
        return $this->render('GrindattoAdministrationBundle::layout.html.twig');
    }

    public function addTrainingAction(Request $request)
    {
    	$formation = new Formation();
   
    	$formationForm = $this->createForm(new FormationType(), $formation);

    	$formationForm->handleRequest($request);

    	if ($formationForm->isValid()) {
    		$formation->setDateCreate(new \DateTime());
    		$formation->setPseudoId(1);

    		$entityManager = $this->getDoctrine()->getManager();
    		$entityManager->persist($formation);
    		$entityManager->flush();

    		return $this->redirect($this->generateUrl('grindatto_administration_list_training'));
    	}

    	return $this->render('GrindattoAdministrationBundle:curriculum:add-training.html.twig', array(
    		'formationForm' => $formationForm->createView(),
    	));
    }

    public function listTrainingAction()
    {
    	$formationRepository = $this->getDoctrine()
    		->getRepository('GrindattoWebSiteBundle:Formation');
    	$formations = $formationRepository->findAll();

    	return $this->render('GrindattoAdministrationBundle:curriculum:list-training.html.twig', array(
    		'formations' => $formations,
    	));
    }

    public function deleteTrainingAction($formationId)
    {
    	$formationRepository = $this->getDoctrine()->getRepository('GrindattoWebSiteBundle:Formation');
    	$formation = $formationRepository->findOneById($formationId);

    	$entityManager = $this->getDoctrine()->getManager();
    	$entityManager->remove($formation);
    	$entityManager->flush();

    	return $this->redirect($this->generateUrl('grindatto_administration_list_training'));
    }

    public function editTrainingAction(Request $request, $formationId)
    {
    	$formationRepository = $this->getDoctrine()->getRepository('GrindattoWebSiteBundle:Formation');
    	$formation = $formationRepository->findOneById($formationId);
   
    	$formationForm = $this->createForm(new FormationType(), $formation);

    	$formationForm->handleRequest($request);

    	if ($formationForm->isValid()) {
    		$formation->setDateCreate(new \DateTime());
    		$formation->setPseudoId(1);

    		$entityManager = $this->getDoctrine()->getManager();
    		$entityManager->persist($formation);
    		$entityManager->flush();

    		return $this->redirect($this->generateUrl('grindatto_administration_list_training'));
    	}

    	return $this->render('GrindattoAdministrationBundle:curriculum:add-training.html.twig', array(
    		'formationForm' => $formationForm->createView(),
    	));
    }
}
