<?php

namespace Container6C7inPx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Qa3axlfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qa3axlf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qa3axlf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AuthenticatorController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.rmBpKAE', 'get_ServiceLocator_RmBpKAEService', true],
            'App\\Controller\\TravelPreferencesController::delete' => ['privates', '.service_locator.JUZyQIf', 'get_ServiceLocator_JUZyQIfService', true],
            'App\\Controller\\TravelPreferencesController::edit' => ['privates', '.service_locator.JUZyQIf', 'get_ServiceLocator_JUZyQIfService', true],
            'App\\Controller\\TravelPreferencesController::index' => ['privates', '.service_locator.Q9j70tw', 'get_ServiceLocator_Q9j70twService', true],
            'App\\Controller\\TravelPreferencesController::show' => ['privates', '.service_locator.JUZyQIf', 'get_ServiceLocator_JUZyQIfService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AuthenticatorController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.rmBpKAE', 'get_ServiceLocator_RmBpKAEService', true],
            'App\\Controller\\TravelPreferencesController:delete' => ['privates', '.service_locator.JUZyQIf', 'get_ServiceLocator_JUZyQIfService', true],
            'App\\Controller\\TravelPreferencesController:edit' => ['privates', '.service_locator.JUZyQIf', 'get_ServiceLocator_JUZyQIfService', true],
            'App\\Controller\\TravelPreferencesController:index' => ['privates', '.service_locator.Q9j70tw', 'get_ServiceLocator_Q9j70twService', true],
            'App\\Controller\\TravelPreferencesController:show' => ['privates', '.service_locator.JUZyQIf', 'get_ServiceLocator_JUZyQIfService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AuthenticatorController::login' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\TravelPreferencesController::delete' => '?',
            'App\\Controller\\TravelPreferencesController::edit' => '?',
            'App\\Controller\\TravelPreferencesController::index' => '?',
            'App\\Controller\\TravelPreferencesController::show' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AuthenticatorController:login' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\TravelPreferencesController:delete' => '?',
            'App\\Controller\\TravelPreferencesController:edit' => '?',
            'App\\Controller\\TravelPreferencesController:index' => '?',
            'App\\Controller\\TravelPreferencesController:show' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
