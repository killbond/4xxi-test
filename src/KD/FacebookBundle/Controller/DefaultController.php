<?php

namespace KD\FacebookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KDFacebookBundle:Default:index.html.twig');
    }
}
