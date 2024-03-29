<?php

namespace ContainerEZMEqV7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4SqQ2_VService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4SqQ2.V' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4SqQ2.V'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'vehiculeRepository' => ['privates', 'App\\Repository\\VehiculeRepository', 'getVehiculeRepositoryService', true],
        ], [
            'vehiculeRepository' => 'App\\Repository\\VehiculeRepository',
        ]);
    }
}
