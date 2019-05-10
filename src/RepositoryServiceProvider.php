<?php
namespace Phooty\Orm;

use Phooty\Support\ServiceProvider;
use Doctrine\ORM\EntityManager;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        // todo: fix or remove
        $this->app->bind(Entities\Player::class, function () {
            return $this->app->make(EntityManager::class)
                ->getRepository(Entities\Player::class);
        });

        $this->app->bind(Entities\Team::class, function () {
            return $this->app->make(EntityManager::class)
                ->getRepository(Entities\Team::class);
        });
    }

    public function provides()
    {
        return [
            Entities\Player::class,
            Entities\Team::class,
        ];
    }
}
