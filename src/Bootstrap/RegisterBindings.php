<?php
namespace Phooty\Orm\Bootstrap;

use Illuminate\Contracts\Container\Container;
use Doctrine\ORM\EntityManagerInterface;

class RegisterBindings
{
    public function register(Container $container)
    {
        $container->singleton(
            EntityManagerInterface::class,
            function () use ($container) {
                return (new BootstrapEntityManager())->bootstrap(
                    $container->make('config'),
                    $container->make('path')
                );
            }
        );

        return $container;
    }
}
