<?php

namespace ContainerE2jneRu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Jtua82_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Jtua82.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Jtua82.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'jeu' => ['privates', '.errored..service_locator.Jtua82..App\\Entity\\Game', NULL, 'Cannot autowire service ".service_locator.Jtua82.": it references class "App\\Entity\\Game" but no such service exists.'],
        ], [
            'em' => '?',
            'jeu' => 'App\\Entity\\Game',
        ]);
    }
}
