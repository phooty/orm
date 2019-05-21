<?php
namespace Phooty\Orm;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class Manager
{
    protected $em;

    public function __construct(EntityManagerInterface $em = null)
    {
        null === $em ? $this->initEntityManager() : $this->em = $em;
    }

    private function initEntityManager()
    {
        Setup::createAnnotationMetadataConfiguration([], true);
    }
}
