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

/**
 * Class Proposal
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package PHPCasts\Entity
 */
class Proposal
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \PHPCasts\Entity\Screencast
     */
    protected $screencast;

    /**
     * @var int
     */
    protected $votes;

    public function __construct()
    {
        $this->votes = 0;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param \PHPCasts\Entity\Screencast $screencast
     */
    public function setScreencast(Screencast $screencast)
    {
        $this->screencast = $screencast;
    }

    /**
     * @return \PHPCasts\Entity\Screencast
     */
    public function getScreencast()
    {
        return $this->screencast;
    }

    /**
     * @param int $votes
     */
    public function setVotes($votes)
    {
        $this->votes = $votes;
    }

    /**
     * @return int
     */
    public function getVotes()
    {
        return $this->votes;
    }
}
