<?php

namespace ContainerEZMEqV7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XO5o5t5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XO5o5t5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XO5o5t5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'user' => ['privates', '.errored..service_locator.XO5o5t5.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.XO5o5t5": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'mailer' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
