<?php

namespace ContainerJpL3HjI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WO8uHEDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wO8uHED' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wO8uHED'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reviewRepository' => ['privates', 'App\\Repository\\ReviewRepository', 'getReviewRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.wO8uHED.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.wO8uHED": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'reviewRepository' => 'App\\Repository\\ReviewRepository',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
