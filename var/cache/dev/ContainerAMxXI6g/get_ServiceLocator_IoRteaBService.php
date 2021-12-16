<?php

namespace ContainerAMxXI6g;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IoRteaBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ioRteaB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ioRteaB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
            'reviewRepository' => ['privates', 'App\\Repository\\ReviewRepository', 'getReviewRepositoryService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
            'travelPreferencesController' => ['services', 'App\\Controller\\TravelPreferencesController', 'getTravelPreferencesControllerService', true],
            'travelPreferencesRepository' => ['privates', 'App\\Repository\\TravelPreferencesRepository', 'getTravelPreferencesRepositoryService', true],
            'tripRepository' => ['privates', 'App\\Repository\\TripRepository', 'getTripRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.ioRteaB.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.ioRteaB": it references class "App\\Entity\\User" but no such service exists.'],
            'vehiculeController' => ['services', 'App\\Controller\\VehiculeController', 'getVehiculeControllerService', true],
            'vehiculeRepository' => ['privates', 'App\\Repository\\VehiculeRepository', 'getVehiculeRepositoryService', true],
        ], [
            'passwordEncoder' => '?',
            'reviewRepository' => 'App\\Repository\\ReviewRepository',
            'slugger' => '?',
            'travelPreferencesController' => 'App\\Controller\\TravelPreferencesController',
            'travelPreferencesRepository' => 'App\\Repository\\TravelPreferencesRepository',
            'tripRepository' => 'App\\Repository\\TripRepository',
            'user' => 'App\\Entity\\User',
            'vehiculeController' => 'App\\Controller\\VehiculeController',
            'vehiculeRepository' => 'App\\Repository\\VehiculeRepository',
        ]);
    }
}