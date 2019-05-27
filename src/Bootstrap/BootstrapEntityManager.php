<?php
namespace Phooty\Orm\Bootstrap;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Illuminate\Contracts\Config\Repository as Config;

class BootstrapEntityManager
{
    public function bootstrap(Config $config)
    {
        $driver = $config->get('database.driver');

        $conn = array_merge($config->get("database.{$driver}"), [
            'driver' => "pdo_{$driver}"
        ]);
        
        $conf = $this->createOrmConfig($config);

        $manager = EntityManager::create($conn, $conf);
        
        return $manager;
    }

    private function createOrmConfig(Config $config)
    {
        $driver = $config->get("orm.config_driver");
        
        switch ($driver) {
            case 'annotations':
                $conf = Setup::createAnnotationMetadataConfiguration(
                    [
                        $config->get("orm.annotations.path")
                    ],
                    $config->get('orm.dev_mode')
                );
                break;
        }

        return $conf;
    }
}
