<?php

namespace PHPCasts\Bundle\WebsiteBundle\Controller;

use PHPCasts\Entity\Proposal;
use PHPCasts\Bundle\WebsiteBundle\Form\Type\ProposalType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $latestProposals = $this->getDoctrine()->getRepository('Entity:Proposal')->findBy([
            'status' => Proposal::STATUS_VOTING
        ], ['votes' => 'desc', 'createdAt' => 'desc'], 4);

        $latestScreencasts = $this->getDoctrine()->getRepository('Entity:Screencast')->findBy([
        ], ['createdAt' => 'desc'], 3);

        return $this->render('PHPCastsWebsiteBundle:Default:index.html.twig', [
            'latestProposals' => $latestProposals,
            'latestScreencasts' => $latestScreencasts,
        ]);
    }

    public function aboutAction()
    {
        return $this->render('PHPCastsWebsiteBundle:Default:about.html.twig');
    }
}
