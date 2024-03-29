<?php

namespace ContainerHvbx0fM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ClO9SG7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ClO9SG7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ClO9SG7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'messageRepository' => ['privates', 'App\\Repository\\MessageRepository', 'getMessageRepositoryService', true],
        ], [
            'messageRepository' => 'App\\Repository\\MessageRepository',
        ]);
    }
}
