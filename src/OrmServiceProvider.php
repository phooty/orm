<?php
namespace Phooty\Orm;

use Phooty\Support\ServiceProvider;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityManager;
use Phooty\Orm\Bootstrap\BootstrapEntityManager;
use Doctrine\DBAL\Types\Type;

class OrmServiceProvider extends ServiceProvider
{
    public function boot()
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

        /* $this->app->afterResolving(Kernel::class, function () {
            $emh = $this->app->make(EntityManagerHelper::class);
            $this->app->make(Kernel::class)->getHelperSet()->set($emh);
            return;
        }); */
        
    }

    public function provides()
    {
        return [
            EntityManagerInterface::class
        ];
    }
}
