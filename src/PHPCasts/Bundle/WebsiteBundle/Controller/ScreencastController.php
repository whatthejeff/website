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

class ScreencastController extends Controller
{
    public function listAction()
    {
        $screencasts = $this->getDoctrine()->getRepository('Entity:Screencast')->findAll();

        return $this->render('@PHPCastsWebsite/Screencast/list.html.twig', [
            'screencasts' => $screencasts,
        ]);
    }
}
