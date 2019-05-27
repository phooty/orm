<?php
namespace Phooty\Orm;

use Illuminate\Contracts\Config\Repository;
use Phooty\Config\BootstrapConfig;
use Phooty\Orm\Bootstrap\BootstrapEntityManager;
use Doctrine\DBAL\Types\Type;

class Manager
{
    protected $em;

    protected $config;

    public function __construct(Repository $config = null)
    {
        $this->config = $config ?? $this->loadConfig();
    }

    private function loadConfig()
    {
        $path = dirname(__DIR__) . '/config';

        return (new BootstrapConfig())->bootstrap([$path]);
    }

    private function initEntityManager()
    {
        Type::addType('uuid', 'Ramsey\Uuid\Doctrine\UuidType');
        $this->em = (new BootstrapEntityManager)->bootstrap($this->config);
    }

    public function getDoctrineManager()
    {
        isset($this->em) ?: $this->initEntityManager();

        return $this->em;
    }
}
