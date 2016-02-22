<?php
/**
 * File: TicketController.php
 */

namespace Application\Controller;
use Application\Entity\Ticket;
use Application\Service\TicketService;
use BjyAuthorize\Exception\UnAuthorizedException;
use Doctrine\ORM\EntityManager;
use Zend\Mvc\Controller\AbstractActionController;

/**
 * Class TicketController
 * @package Application\Controller
 */
class TicketController extends AbstractActionController
{
    /**
     * Only users with the role "user" can create tickets.
     */
    public function createAction()
    {
        if (!$this->isAllowed('Ticket', 'create')) {
            throw new UnAuthorizedException();
        }
        echo "Creating a ticket.";
        return false;
    }

    /**
     * Only users with the role "agent" can change a ticket status.
     */
    public function changeStatusAction()
    {
        if (!$this->isAllowed('Ticket', 'change_status')) {
            throw new UnAuthorizedException();
        }
        echo "Changing a ticket's status.";
        return false;
    }

    /**
     * Only users with the role "agent" can read tickets.
     */
    public function readAction()
    {
        if (!$this->isAllowed('Ticket', 'read')) {
            throw new UnAuthorizedException();
        }
        echo "Reading a ticket.";
        return false;
    }

    /**
     * Only users that can read tickets can list them.
     */
    public function listAction()
    {
        if (!$this->isAllowed('Ticket', 'read')) {
            throw new UnAuthorizedException();
        }

        /** @var TicketService $service */
        $service = $this->getServiceLocator()->get('Application\Service\Ticket');
        $tickets = $service->getAllTickets();

        foreach ($tickets as $ticket) {
            echo $ticket->getTitle() . ', by ' . $ticket->getCreator()->getEmail() . '<br/>';
        }
        return false;
    }
}