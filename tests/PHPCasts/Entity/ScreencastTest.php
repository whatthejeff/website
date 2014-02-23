<?php

/*
 * This file is part of the phpcasts package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPCasts\Entity;

class ScreencastTest extends \PHPUnit_Framework_TestCase
{
    protected function assertPreConditions()
    {
        $this->assertTrue(
            class_exists($class = 'PHPCasts\Entity\Screencast'),
            sprintf('Class not found: %s', $class)
        );
    }

    public function testShouldInstantiateWithNoArguments()
    {
        $screencast = new Screencast();
        $this->assertInstanceOf('PHPCasts\Entity\Screencast', $screencast);
    }

    public function testNewScreencastShouldHaveCreatedAtSet()
    {
        $screencast = new Screencast();
        $this->assertAttributeInstanceOf('\DateTime', 'createdAt', $screencast);
    }

    public function testSetIdShouldWork()
    {
        $screencast = new Screencast();
        $screencast->setId(1);
        $this->assertAttributeEquals(1, 'id', $screencast);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetIdWithNonIntegerShouldThrowException()
    {
        $screencast = new Screencast();
        $screencast->setId('id');
    }

    public function testGetIdShouldWork()
    {
        $screencast = new Screencast();
        $screencast->setId(1);
        $this->assertEquals(1, $screencast->getId());
    }

    public function testSetNameShouldWork()
    {
        $screencast = new Screencast();
        $screencast->setName('name');
        $this->assertAttributeEquals('name', 'name', $screencast);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetNameWithNonStringShouldThrowException()
    {
        $screencast = new Screencast();
        $screencast->setName(1);
    }

    public function testGetNameShouldWork()
    {
        $screencast = new Screencast();
        $screencast->setName('name');
        $this->assertEquals('name', $screencast->getName());
    }

    public function testSetCreatedAtShouldWork()
    {
        $screencast = new Screencast();
        $screencast->setCreatedAt($date = new \DateTime());
        $this->assertAttributeEquals($date, 'createdAt', $screencast);
    }

    /**
     * @expectedException \Exception
     */
    public function testSetCreatedAtWithNonDateTimeObjectShouldThrowException()
    {
        $screencast = new Screencast();
        $screencast->setCreatedAt('string');
    }

    public function testGetCreatedAtShouldWork()
    {
        $screencast = new Screencast();
        $screencast->setCreatedAt($date = new \DateTime());
        $this->assertEquals($date, $screencast->getCreatedAt());
    }

    public function testSetProposalShouldWork()
    {
        $screencast = new Screencast();
        $screencast->setProposal($proposal = new Proposal());
        $this->assertAttributeEquals($proposal, 'proposal', $screencast);
    }

    /**
     * @expectedException \Exception
     */
    public function testSetProposalWithNonDateTimeObjectShouldThrowException()
    {
        $screencast = new Screencast();
        $screencast->setProposal('string');
    }

    public function testGetProposalShouldWork()
    {
        $screencast = new Screencast();
        $screencast->setProposal($proposal = new Proposal());
        $this->assertEquals($proposal, $screencast->getProposal());
    }

    public function testSetUrlShouldWork()
    {
        $screencast = new Screencast();
        $screencast->setUrl('url');
        $this->assertAttributeEquals('url', 'url', $screencast);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetUrlWithNonStringShouldThrowException()
    {
        $screencast = new Screencast();
        $screencast->setUrl(1);
    }

    public function testGetUrlShouldWork()
    {
        $screencast = new Screencast();
        $screencast->setUrl('url');
        $this->assertEquals('url', $screencast->getUrl());
    }
}
