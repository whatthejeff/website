<?php

namespace PHPCasts\Bundle\WebsiteBundle\Controller;

use PHPCasts\Entity\Proposal;
use PHPCasts\Bundle\WebsiteBundle\Form\Type\ProposalType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $proposalForm = $this->createForm(new ProposalType(), new Proposal(), [
            'action' => $this->generateUrl('php_casts_website_proposal_create'),
        ]);

        return $this->render('PHPCastsWebsiteBundle:Default:index.html.twig', [
            'proposalForm' => $proposalForm->createView()
        ]);
    }
}
