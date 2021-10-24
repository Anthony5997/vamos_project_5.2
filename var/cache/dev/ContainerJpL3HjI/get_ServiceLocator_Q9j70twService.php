<?php

namespace ContainerJpL3HjI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Q9j70twService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Q9j70tw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Q9j70tw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'travelPreferencesRepository' => ['privates', 'App\\Repository\\TravelPreferencesRepository', 'getTravelPreferencesRepositoryService', true],
        ], [
            'travelPreferencesRepository' => 'App\\Repository\\TravelPreferencesRepository',
        ]);
    }
}
