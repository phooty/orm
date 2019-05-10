<?php
namespace Phooty\Orm\Bootstrap;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Phooty\Config\Config;
use Phooty\Foundation\Path;

class BootstrapEntityManager
{
    public function bootstrap(Config $config, Path $path)
    {
        $driver = $config->get('phooty.database.driver');

        $conn = array_merge($config->get("phooty.database.{$driver}"), [
            'driver' => "pdo_{$driver}"
        ]);

        if (isset($conn['path'])) {
            $conn['path'] = $path.'/'.$conn['path'];
        }

        $conf = $this->createOrmConfig(array_merge(
            $config->get('phooty.orm'),
            ['dev_mode' => $config->get('phooty.app.dev_mode')]
        ), $path);

        $manager = EntityManager::create($conn, $conf);
        
        return $manager;
    }

    private function createOrmConfig(array $config, Path $path)
    {
        $method = $config['config_method'] ?? 'annotations';
        
        switch ($method) {
            case 'annotations':
                $config = Setup::createAnnotationMetadataConfiguration(
                    [
                        $path->get($config['annotations']['path'])
                    ],
                    $config['dev_mode']
                );
                break;
        }
        return $config;
    }
}
