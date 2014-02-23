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

class ProposalTest extends \PHPUnit_Framework_TestCase
{
    protected function assertPreConditions()
    {
        $this->assertTrue(
            class_exists($class = 'PHPCasts\Entity\Proposal'),
            sprintf('Class not found: %s', $class)
        );
    }

    public function testShouldInstantiateWithNoArguments()
    {
        $proposal = new Proposal();
        $this->assertInstanceOf('PHPCasts\Entity\Proposal', $proposal);
    }

    public function testNewProposalShouldHaveZeroVotes()
    {
        $proposal = new Proposal();
        $this->assertAttributeEquals(0, 'votes', $proposal);
    }

    public function testNewProposalShouldHaveVotingStatus()
    {
        $proposal = new Proposal();

        $this->assertAttributeEquals(
            Proposal::STATUS_VOTING,
            'status',
            $proposal
        );
    }

    public function testSetIdShouldWork()
    {
        $proposal = new Proposal();
        $proposal->setId(1);
        $this->assertAttributeEquals(1, 'id', $proposal);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetIdWithNonIntegerShouldThrowException()
    {
        $proposal = new Proposal();
        $proposal->setId('id');
    }

    public function testGetIdShouldWork()
    {
        $proposal = new Proposal();
        $proposal->setId(1);
        $this->assertEquals(1, $proposal->getId());
    }

    public function testSetNameShouldWork()
    {
        $proposal = new Proposal();
        $proposal->setName('name');
        $this->assertAttributeEquals('name', 'name', $proposal);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetNameWithNonStringShouldThrowException()
    {
        $proposal = new Proposal();
        $proposal->setName(1);
    }

    public function testGetNameShouldWork()
    {
        $proposal = new Proposal();
        $proposal->setName('name');
        $this->assertEquals('name', $proposal->getName());
    }

    public function testSetCreatedAtShouldWork()
    {
        $proposal = new Proposal();
        $proposal->setCreatedAt($date = new \DateTime());
        $this->assertAttributeEquals($date, 'createdAt', $proposal);
    }

    /**
     * @expectedException \Exception
     */
    public function testSetCreatedAtWithNonDateTimeObjectShouldThrowException()
    {
        $proposal = new Proposal();
        $proposal->setCreatedAt('string');
    }

    public function testGetCreatedAtShouldWork()
    {
        $proposal = new Proposal();
        $proposal->setCreatedAt($date = new \DateTime());
        $this->assertEquals($date, $proposal->getCreatedAt());
    }

    public function testSetDescriptionShouldWork()
    {
        $proposal = new Proposal();
        $proposal->setDescription('description');
        $this->assertAttributeEquals('description', 'description', $proposal);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetDescriptionWithNonStringShouldThrowException()
    {
        $proposal = new Proposal();
        $proposal->setDescription(1);
    }

    public function testGetDescriptionShouldWork()
    {
        $proposal = new Proposal();
        $proposal->setDescription('description');
        $this->assertEquals('description', $proposal->getDescription());
    }

    public function testSetScreencastShouldWork()
    {
        $proposal = new Proposal();
        $proposal->setScreencast($screencast = new Screencast());
        $this->assertAttributeEquals($screencast, 'screencast', $proposal);
    }

    /**
     * @expectedException \Exception
     */
    public function testSetScreencastWithNonDateTimeObjectShouldThrowException()
    {
        $proposal = new Proposal();
        $proposal->setScreencast('string');
    }

    public function testGetScreencastShouldWork()
    {
        $proposal = new Proposal();
        $proposal->setScreencast($screencast = new Screencast());
        $this->assertEquals($screencast, $proposal->getScreencast());
    }

    public function testSetSlugShouldWork()
    {
        $proposal = new Proposal();
        $proposal->setSlug('slug');
        $this->assertAttributeEquals('slug', 'slug', $proposal);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetSlugWithNonStringShouldThrowException()
    {
        $proposal = new Proposal();
        $proposal->setSlug(1);
    }

    public function testGetSlugShouldWork()
    {
        $proposal = new Proposal();
        $proposal->setSlug('slug');
        $this->assertEquals('slug', $proposal->getSlug());
    }

    public function testSetStatusShouldWork()
    {
        $proposal = new Proposal();
        $proposal->setStatus(Proposal::STATUS_PUBLISHED);
        $this->assertAttributeEquals(Proposal::STATUS_PUBLISHED, 'status', $proposal);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetStatusWithNonStatusShouldThrowException()
    {
        $proposal = new Proposal();
        $proposal->setStatus(3);
    }

    public function testGetStatusShouldWork()
    {
        $proposal = new Proposal();
        $proposal->setStatus(Proposal::STATUS_VOTING);
        $this->assertEquals(Proposal::STATUS_VOTING, $proposal->getStatus());
    }

    public function testSetVotesShouldWork()
    {
        $proposal = new Proposal();
        $proposal->setVotes(1);
        $this->assertAttributeEquals(1, 'votes', $proposal);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetVotesWithNonIntegerhouldThrowException()
    {
        $proposal = new Proposal();
        $proposal->setVotes('votes');
    }

    public function testGetVotesShouldWork()
    {
        $proposal = new Proposal();
        $proposal->setVotes(1);
        $this->assertEquals(1, $proposal->getVotes());
    }
}
