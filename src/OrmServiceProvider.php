<?php
namespace Phooty\Orm;

use Phooty\Support\ServiceProvider;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityManager;
use Phooty\Orm\Bootstrap\BootstrapEntityManager;
use Doctrine\DBAL\Types\Type;

class OrmServiceProvider extends ServiceProvider
{
    public function register()
    {
        Type::addType('uuid', 'Ramsey\Uuid\Doctrine\UuidType');

        $this->app->singleton(EntityManagerInterface::class, function () {
            return (new BootstrapEntityManager())->bootstrap(
                    $this->app->make('config'),
                    $this->app->make('path')
                );
            }
        );

        $this->app->alias(EntityManagerInterface::class, EntityManager::class);


    }

    public function provides()
    {
        return [
            EntityManagerInterface::class
        ];
    }
}
