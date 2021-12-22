<?php

namespace ContainerVFv8AAx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8K6ZgujService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8K6Zguj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8K6Zguj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'bookingRepository' => ['privates', 'App\\Repository\\BookingRepository', 'getBookingRepositoryService', true],
            'trip' => ['privates', '.errored..service_locator.8K6Zguj.App\\Entity\\Trip', NULL, 'Cannot autowire service ".service_locator.8K6Zguj": it references class "App\\Entity\\Trip" but no such service exists.'],
            'userExperienceLevelRepository' => ['privates', 'App\\Repository\\UserExperienceLevelRepository', 'getUserExperienceLevelRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'bookingRepository' => 'App\\Repository\\BookingRepository',
            'trip' => 'App\\Entity\\Trip',
            'userExperienceLevelRepository' => 'App\\Repository\\UserExperienceLevelRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
