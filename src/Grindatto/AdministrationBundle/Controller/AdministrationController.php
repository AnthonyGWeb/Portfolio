<?php

namespace Grindatto\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdministrationController extends Controller
{
    public function indexAction()
    {
        return $this->render('GrindattoAdministrationBundle:Default:index.html.twig');
    }
}
