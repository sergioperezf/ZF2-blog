<?php
/**
 * File: TicketService.php.
 */

namespace Application\Service;

use Application\Entity\Ticket;
use Doctrine\ORM\EntityManager;

/**
 * Class TicketService
 * @package Application\Service
 */
class TicketService
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param Ticket $ticket
     *
     * @return Ticket
     */
    public function saveTicket(Ticket $ticket)
    {

    }

    /**
     * @return Ticket[]
     */
    public function getAllTickets()
    {
        return $this->entityManager->getRepository('Application\Entity\Ticket')->findAll();
    }

    /**
     * @param integer $id
     *
     * @return Ticket
     */
    public function getTicketById($id)
    {

    }
}