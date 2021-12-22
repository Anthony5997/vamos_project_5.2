<?php

namespace ContainerVFv8AAx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V3bldx6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.v3bldx6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.v3bldx6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'booking' => ['privates', '.errored..service_locator.v3bldx6.App\\Entity\\Booking', NULL, 'Cannot autowire service ".service_locator.v3bldx6": it references class "App\\Entity\\Booking" but no such service exists.'],
        ], [
            'booking' => 'App\\Entity\\Booking',
        ]);
    }
}
