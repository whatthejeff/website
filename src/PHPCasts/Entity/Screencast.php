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
 * Class Screencast
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package PHPCasts\Entity
 */
class Screencast
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
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \PHPCasts\Entity\Proposal
     */
    protected $proposal;

    /**
     * @var string
     */
    protected $url;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
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
     * @param \PHPCasts\Entity\Proposal $proposal
     */
    public function setProposal(Proposal $proposal = null)
    {
        $this->proposal = $proposal;
    }

    /**
     * @return \PHPCasts\Entity\Proposal
     */
    public function getProposal()
    {
        return $this->proposal;
    }

    /**
     * @param string $url
     * @throws \InvalidArgumentException
     */
    public function setUrl($url)
    {
        if (!is_string($url)) {
            throw new \InvalidArgumentException(sprintf(
                    'The $url parameter should be a string. "%s" given.', $url)
            );
        }

        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
