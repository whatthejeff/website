<?php

/*
 * This file is part of the phpcasts package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPCasts\Bundle\WebsiteBundle\Controller;

use PHPCasts\Entity\Proposal;
use PHPCasts\Bundle\WebsiteBundle\Form\Type\ProposalType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ProposalController extends Controller
{
    public function createAction()
    {
        $form = $this->createForm(new ProposalType(), $proposal = new Proposal());

        try {
            $submit = $form->handleRequest($this->getRequest());
        } catch (\Exception $e) {
            var_dump($e->getMessage()); exit;
        }

        $em = $this->get('doctrine.orm.entity_manager');

        try {
            $em->persist($proposal);
            $em->flush();
        } catch (\Exception $e) {
            var_dump($e->getMessage()); exit;
        }

        return $this->render('@PHPCastsWebsite/Default/index.html.twig', [
            'proposalForm' => $form->createView()
        ]);
    }
}
