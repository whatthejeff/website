<?php

namespace PHPCast\Bundle\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PHPCastWebsiteBundle:Default:index.html.twig');
    }
}
