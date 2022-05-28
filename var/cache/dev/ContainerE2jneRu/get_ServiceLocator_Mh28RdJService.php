<?php

namespace ContainerE2jneRu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Mh28RdJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Mh28RdJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Mh28RdJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'player' => ['privates', '.errored..service_locator.Mh28RdJ.App\\Entity\\Player', NULL, 'Cannot autowire service ".service_locator.Mh28RdJ": it references class "App\\Entity\\Player" but no such service exists.'],
            'playerRepository' => ['privates', 'App\\Repository\\PlayerRepository', 'getPlayerRepositoryService', true],
        ], [
            'player' => 'App\\Entity\\Player',
            'playerRepository' => 'App\\Repository\\PlayerRepository',
        ]);
    }
}
