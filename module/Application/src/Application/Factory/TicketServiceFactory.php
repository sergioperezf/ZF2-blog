<?php
/**
 * File: TicketServiceFactory.php.
 */

namespace Application\Factory;
use Application\Service\TicketService;
use Doctrine\ORM\EntityManager;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class TicketServiceFactory
 * @package Application\Factory
 */
class TicketServiceFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return TicketService
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var EntityManager $entityManager */
        $entityManager = $serviceLocator->get('Doctrine\ORM\EntityManager');
        return new TicketService($entityManager);
    }
}