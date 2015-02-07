<?php

namespace Application\Entity;

use DateTime;
use Zend\Stdlib\Hydrator\ClassMethods;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Interaction
 * @package Application\Entity
 * @ORM\Table(name="interaction")
 * @ORM\Entity
 */
class Interaction extends AbstractEntity
{
    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="date_posted", type="datetime", nullable=false)
     * @var datetime
     */
    private $date_posted;

    /**
     * @var \Ticket
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Ticket")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="ticket", referencedColumnName="id")
     * })
     */
    private $ticket;

    /**
    * @ORM\ManyToOne(targetEntity="Application\Entity\User")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="user", referencedColumnName="id")
    * })
    * @var \Application\Entity\User
    */
    private $user;

    /**
     * get date_posted
     *
     * @return \DateTime
     */
    public function getDatePosted()
    {
        return $this->date_posted;
    }

    /**
     * set date_posted
     *
     * @param datetime $date_posted Return datetime
     * @return $this
     */
    public function setDatePosted($date_posted)
    {
        $this->date_posted = $date_posted;
        return $this;
    }

    /**
     * get ticket
     *
     * @return \Application\Entity\Ticket
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * set ticket
     *
     * @param object $ticket \Application\Entity\Ticket
     * @return $this
     */
    public function setTicket(Ticket $ticket = null)
    {
        $this->ticket = $ticket;
        return $this;
    }

    /**
     * get user
     *
     * @return \Application\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * set user
     *
     * @param User|object $user \Application\Entity\User
     * @return $this
     */
    public function setUser(User $user)
    {
        $this->user = $user;
        return $this;
    }
}
