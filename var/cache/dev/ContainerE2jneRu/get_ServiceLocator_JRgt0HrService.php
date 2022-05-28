<?php

namespace ContainerE2jneRu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JRgt0HrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jRgt0Hr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jRgt0Hr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'gr' => ['privates', 'App\\Repository\\GameRepository', 'getGameRepositoryService', true],
        ], [
            'gr' => 'App\\Repository\\GameRepository',
        ]);
    }
}
