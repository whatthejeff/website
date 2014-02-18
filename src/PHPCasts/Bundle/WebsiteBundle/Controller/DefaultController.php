<?php

namespace PHPCasts\Bundle\WebsiteBundle\Controller;

use PHPCasts\Bundle\WebsiteBundle\Form\Type\ProposalType;
use PHPCasts\Entity\Proposal;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $proposalForm = $this->createForm(new ProposalType(), new Proposal());

        return $this->render('PHPCastsWebsiteBundle:Default:index.html.twig', [
            'proposalForm' => $proposalForm->createView()
        ]);
    }
}
