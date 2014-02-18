<?php

namespace PHPCasts\Bundle\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PHPCastsWebsiteBundle:Default:index.html.twig');
    }
}
