<?php

namespace BabysittingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BabysittingBundle:Default:index.html.twig');
    }
}
