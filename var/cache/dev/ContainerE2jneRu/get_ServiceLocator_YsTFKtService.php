<?php

namespace ContainerE2jneRu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YsTFKtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ysTF_kt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ysTF_kt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'gr' => ['privates', 'App\\Repository\\GameRepository', 'getGameRepositoryService', true],
        ], [
            'em' => '?',
            'gr' => 'App\\Repository\\GameRepository',
        ]);
    }
}
