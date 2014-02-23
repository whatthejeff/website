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
    const STATUS_VOTING = 0;
    const STATUS_PUBLISHED = 1;

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
     * @var string
     */
    protected $slug;

    /**
     * @var int
     */
    protected $votes;

    /**
     * @var int
     */
    protected $status;

    public function __construct()
    {
        $this->votes = 0;
        $this->createdAt = new \DateTime();
        $this->status = self::STATUS_VOTING;
    }

    /**
     * @param int $id
     * @throws \InvalidArgumentException
     */
    public function setId($id)
    {
        if (!is_integer($id)) {
            throw new \InvalidArgumentException(sprintf(
                'The $id parameter should be an integer. "%s" given.', $id)
            );
        }

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
     * @throws \InvalidArgumentException
     */
    public function setName($name)
    {
        if (!is_string($name)) {
            throw new \InvalidArgumentException(sprintf(
                'The $name parameter should be a string. "%s" given.', $name)
            );
        }

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
     * @throws \InvalidArgumentException
     */
    public function setDescription($description)
    {
        if (!is_string($description)) {
            throw new \InvalidArgumentException(sprintf(
                'The $description parameter should be a string. "%s" given.',
                $description)
            );
        }

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
     * @param string $slug
     * @throws \InvalidArgumentException
     */
    public function setSlug($slug)
    {
        if (!is_string($slug)) {
            throw new \InvalidArgumentException(sprintf(
                'The $slug parameter should be a string. "%s" given.', $slug)
            );
        }

        $this->slug = $slug;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param int $status
     * @throws \InvalidArgumentException
     */
    public function setStatus($status)
    {
        if ($status !== self::STATUS_VOTING &&
            $status !== self::STATUS_PUBLISHED) {
            throw new \InvalidArgumentException(sprintf(
                'The $status parameter should be a valid status. "%s" given.',
                $status)
            );
        }

        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $votes
     * @throws \InvalidArgumentException
     */
    public function setVotes($votes)
    {
        if (!is_integer($votes)) {
            throw new \InvalidArgumentException(sprintf(
                'The $votes parameter should be a string. "%s" given.', $votes)
            );
        }

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
