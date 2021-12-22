<?php

namespace ContainerURjOjth;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_28Ylf2JService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.28Ylf2J' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.28Ylf2J'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::index' => ['privates', '.service_locator.npyimLp', 'get_ServiceLocator_NpyimLpService', true],
            'App\\Controller\\AuthenticatorController::forgetPasswordReset' => ['privates', '.service_locator.U8lg1mL', 'get_ServiceLocator_U8lg1mLService', true],
            'App\\Controller\\AuthenticatorController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\AuthenticatorController::resetPassword' => ['privates', '.service_locator.HT72DTz', 'get_ServiceLocator_HT72DTzService', true],
            'App\\Controller\\AuthenticatorController::sendEmail' => ['privates', '.service_locator.XO5o5t5', 'get_ServiceLocator_XO5o5t5Service', true],
            'App\\Controller\\BookingController::delete' => ['privates', '.service_locator.v3bldx6', 'get_ServiceLocator_V3bldx6Service', true],
            'App\\Controller\\BookingController::index' => ['privates', '.service_locator.ENco2Qi', 'get_ServiceLocator_ENco2QiService', true],
            'App\\Controller\\BookingController::new' => ['privates', '.service_locator.DpceKts', 'get_ServiceLocator_DpceKtsService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.PFPujJk', 'get_ServiceLocator_PFPujJkService', true],
            'App\\Controller\\MessageController::delete' => ['privates', '.service_locator.N8sf8v1', 'get_ServiceLocator_N8sf8v1Service', true],
            'App\\Controller\\MessageController::detail' => ['privates', '.service_locator.8omtK4t', 'get_ServiceLocator_8omtK4tService', true],
            'App\\Controller\\MessageController::edit' => ['privates', '.service_locator.N8sf8v1', 'get_ServiceLocator_N8sf8v1Service', true],
            'App\\Controller\\MessageController::index' => ['privates', '.service_locator.ClO9SG7', 'get_ServiceLocator_ClO9SG7Service', true],
            'App\\Controller\\MessageController::new' => ['privates', '.service_locator.HUl75ny', 'get_ServiceLocator_HUl75nyService', true],
            'App\\Controller\\MessageController::show' => ['privates', '.service_locator.8omtK4t', 'get_ServiceLocator_8omtK4tService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.rmBpKAE', 'get_ServiceLocator_RmBpKAEService', true],
            'App\\Controller\\ReviewController::delete' => ['privates', '.service_locator.Z7x75EX', 'get_ServiceLocator_Z7x75EXService', true],
            'App\\Controller\\ReviewController::edit' => ['privates', '.service_locator.Z7x75EX', 'get_ServiceLocator_Z7x75EXService', true],
            'App\\Controller\\ReviewController::index' => ['privates', '.service_locator.OEREEZh', 'get_ServiceLocator_OEREEZhService', true],
            'App\\Controller\\ReviewController::new' => ['privates', '.service_locator.j1p1qTp', 'get_ServiceLocator_J1p1qTpService', true],
            'App\\Controller\\ReviewController::show' => ['privates', '.service_locator.wO8uHED', 'get_ServiceLocator_WO8uHEDService', true],
            'App\\Controller\\TravelPreferencesController::delete' => ['privates', '.service_locator.JUZyQIf', 'get_ServiceLocator_JUZyQIfService', true],
            'App\\Controller\\TravelPreferencesController::edit' => ['privates', '.service_locator.JUZyQIf', 'get_ServiceLocator_JUZyQIfService', true],
            'App\\Controller\\TravelPreferencesController::index' => ['privates', '.service_locator.Q9j70tw', 'get_ServiceLocator_Q9j70twService', true],
            'App\\Controller\\TravelPreferencesController::show' => ['privates', '.service_locator.JUZyQIf', 'get_ServiceLocator_JUZyQIfService', true],
            'App\\Controller\\TripController::delete' => ['privates', '.service_locator.ndWfguk', 'get_ServiceLocator_NdWfgukService', true],
            'App\\Controller\\TripController::details' => ['privates', '.service_locator.UQ292Y5', 'get_ServiceLocator_UQ292Y5Service', true],
            'App\\Controller\\TripController::edit' => ['privates', '.service_locator.ndWfguk', 'get_ServiceLocator_NdWfgukService', true],
            'App\\Controller\\TripController::finish' => ['privates', '.service_locator.8K6Zguj', 'get_ServiceLocator_8K6ZgujService', true],
            'App\\Controller\\TripController::index' => ['privates', '.service_locator.PFPujJk', 'get_ServiceLocator_PFPujJkService', true],
            'App\\Controller\\TripController::routeRequest' => ['privates', '.service_locator.ndWfguk', 'get_ServiceLocator_NdWfgukService', true],
            'App\\Controller\\TripController::search' => ['privates', '.service_locator.npyimLp', 'get_ServiceLocator_NpyimLpService', true],
            'App\\Controller\\TripController::show' => ['privates', '.service_locator.ndWfguk', 'get_ServiceLocator_NdWfgukService', true],
            'App\\Controller\\TripController::start' => ['privates', '.service_locator.ndWfguk', 'get_ServiceLocator_NdWfgukService', true],
            'App\\Controller\\TripController::treatment' => ['privates', '.service_locator.ndWfguk', 'get_ServiceLocator_NdWfgukService', true],
            'App\\Controller\\TypeOfVehiculeController::delete' => ['privates', '.service_locator.W8c9CE7', 'get_ServiceLocator_W8c9CE7Service', true],
            'App\\Controller\\TypeOfVehiculeController::edit' => ['privates', '.service_locator.W8c9CE7', 'get_ServiceLocator_W8c9CE7Service', true],
            'App\\Controller\\TypeOfVehiculeController::index' => ['privates', '.service_locator.6rc6rfL', 'get_ServiceLocator_6rc6rfLService', true],
            'App\\Controller\\TypeOfVehiculeController::show' => ['privates', '.service_locator.W8c9CE7', 'get_ServiceLocator_W8c9CE7Service', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.CgIPHFT', 'get_ServiceLocator_CgIPHFTService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.4MF6DUv', 'get_ServiceLocator_4MF6DUvService', true],
            'App\\Controller\\UserController::viewProfile' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\VehiculeController::delete' => ['privates', '.service_locator.0J1782j', 'get_ServiceLocator_0J1782jService', true],
            'App\\Controller\\VehiculeController::edit' => ['privates', '.service_locator.0J1782j', 'get_ServiceLocator_0J1782jService', true],
            'App\\Controller\\VehiculeController::index' => ['privates', '.service_locator.4SqQ2.V', 'get_ServiceLocator_4SqQ2_VService', true],
            'App\\Controller\\VehiculeController::show' => ['privates', '.service_locator.0J1782j', 'get_ServiceLocator_0J1782jService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AdminController:index' => ['privates', '.service_locator.npyimLp', 'get_ServiceLocator_NpyimLpService', true],
            'App\\Controller\\AuthenticatorController:forgetPasswordReset' => ['privates', '.service_locator.U8lg1mL', 'get_ServiceLocator_U8lg1mLService', true],
            'App\\Controller\\AuthenticatorController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\AuthenticatorController:resetPassword' => ['privates', '.service_locator.HT72DTz', 'get_ServiceLocator_HT72DTzService', true],
            'App\\Controller\\AuthenticatorController:sendEmail' => ['privates', '.service_locator.XO5o5t5', 'get_ServiceLocator_XO5o5t5Service', true],
            'App\\Controller\\BookingController:delete' => ['privates', '.service_locator.v3bldx6', 'get_ServiceLocator_V3bldx6Service', true],
            'App\\Controller\\BookingController:index' => ['privates', '.service_locator.ENco2Qi', 'get_ServiceLocator_ENco2QiService', true],
            'App\\Controller\\BookingController:new' => ['privates', '.service_locator.DpceKts', 'get_ServiceLocator_DpceKtsService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.PFPujJk', 'get_ServiceLocator_PFPujJkService', true],
            'App\\Controller\\MessageController:delete' => ['privates', '.service_locator.N8sf8v1', 'get_ServiceLocator_N8sf8v1Service', true],
            'App\\Controller\\MessageController:detail' => ['privates', '.service_locator.8omtK4t', 'get_ServiceLocator_8omtK4tService', true],
            'App\\Controller\\MessageController:edit' => ['privates', '.service_locator.N8sf8v1', 'get_ServiceLocator_N8sf8v1Service', true],
            'App\\Controller\\MessageController:index' => ['privates', '.service_locator.ClO9SG7', 'get_ServiceLocator_ClO9SG7Service', true],
            'App\\Controller\\MessageController:new' => ['privates', '.service_locator.HUl75ny', 'get_ServiceLocator_HUl75nyService', true],
            'App\\Controller\\MessageController:show' => ['privates', '.service_locator.8omtK4t', 'get_ServiceLocator_8omtK4tService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.rmBpKAE', 'get_ServiceLocator_RmBpKAEService', true],
            'App\\Controller\\ReviewController:delete' => ['privates', '.service_locator.Z7x75EX', 'get_ServiceLocator_Z7x75EXService', true],
            'App\\Controller\\ReviewController:edit' => ['privates', '.service_locator.Z7x75EX', 'get_ServiceLocator_Z7x75EXService', true],
            'App\\Controller\\ReviewController:index' => ['privates', '.service_locator.OEREEZh', 'get_ServiceLocator_OEREEZhService', true],
            'App\\Controller\\ReviewController:new' => ['privates', '.service_locator.j1p1qTp', 'get_ServiceLocator_J1p1qTpService', true],
            'App\\Controller\\ReviewController:show' => ['privates', '.service_locator.wO8uHED', 'get_ServiceLocator_WO8uHEDService', true],
            'App\\Controller\\TravelPreferencesController:delete' => ['privates', '.service_locator.JUZyQIf', 'get_ServiceLocator_JUZyQIfService', true],
            'App\\Controller\\TravelPreferencesController:edit' => ['privates', '.service_locator.JUZyQIf', 'get_ServiceLocator_JUZyQIfService', true],
            'App\\Controller\\TravelPreferencesController:index' => ['privates', '.service_locator.Q9j70tw', 'get_ServiceLocator_Q9j70twService', true],
            'App\\Controller\\TravelPreferencesController:show' => ['privates', '.service_locator.JUZyQIf', 'get_ServiceLocator_JUZyQIfService', true],
            'App\\Controller\\TripController:delete' => ['privates', '.service_locator.ndWfguk', 'get_ServiceLocator_NdWfgukService', true],
            'App\\Controller\\TripController:details' => ['privates', '.service_locator.UQ292Y5', 'get_ServiceLocator_UQ292Y5Service', true],
            'App\\Controller\\TripController:edit' => ['privates', '.service_locator.ndWfguk', 'get_ServiceLocator_NdWfgukService', true],
            'App\\Controller\\TripController:finish' => ['privates', '.service_locator.8K6Zguj', 'get_ServiceLocator_8K6ZgujService', true],
            'App\\Controller\\TripController:index' => ['privates', '.service_locator.PFPujJk', 'get_ServiceLocator_PFPujJkService', true],
            'App\\Controller\\TripController:routeRequest' => ['privates', '.service_locator.ndWfguk', 'get_ServiceLocator_NdWfgukService', true],
            'App\\Controller\\TripController:search' => ['privates', '.service_locator.npyimLp', 'get_ServiceLocator_NpyimLpService', true],
            'App\\Controller\\TripController:show' => ['privates', '.service_locator.ndWfguk', 'get_ServiceLocator_NdWfgukService', true],
            'App\\Controller\\TripController:start' => ['privates', '.service_locator.ndWfguk', 'get_ServiceLocator_NdWfgukService', true],
            'App\\Controller\\TripController:treatment' => ['privates', '.service_locator.ndWfguk', 'get_ServiceLocator_NdWfgukService', true],
            'App\\Controller\\TypeOfVehiculeController:delete' => ['privates', '.service_locator.W8c9CE7', 'get_ServiceLocator_W8c9CE7Service', true],
            'App\\Controller\\TypeOfVehiculeController:edit' => ['privates', '.service_locator.W8c9CE7', 'get_ServiceLocator_W8c9CE7Service', true],
            'App\\Controller\\TypeOfVehiculeController:index' => ['privates', '.service_locator.6rc6rfL', 'get_ServiceLocator_6rc6rfLService', true],
            'App\\Controller\\TypeOfVehiculeController:show' => ['privates', '.service_locator.W8c9CE7', 'get_ServiceLocator_W8c9CE7Service', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.CgIPHFT', 'get_ServiceLocator_CgIPHFTService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.4MF6DUv', 'get_ServiceLocator_4MF6DUvService', true],
            'App\\Controller\\UserController:viewProfile' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\VehiculeController:delete' => ['privates', '.service_locator.0J1782j', 'get_ServiceLocator_0J1782jService', true],
            'App\\Controller\\VehiculeController:edit' => ['privates', '.service_locator.0J1782j', 'get_ServiceLocator_0J1782jService', true],
            'App\\Controller\\VehiculeController:index' => ['privates', '.service_locator.4SqQ2.V', 'get_ServiceLocator_4SqQ2_VService', true],
            'App\\Controller\\VehiculeController:show' => ['privates', '.service_locator.0J1782j', 'get_ServiceLocator_0J1782jService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AdminController::index' => '?',
            'App\\Controller\\AuthenticatorController::forgetPasswordReset' => '?',
            'App\\Controller\\AuthenticatorController::login' => '?',
            'App\\Controller\\AuthenticatorController::resetPassword' => '?',
            'App\\Controller\\AuthenticatorController::sendEmail' => '?',
            'App\\Controller\\BookingController::delete' => '?',
            'App\\Controller\\BookingController::index' => '?',
            'App\\Controller\\BookingController::new' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\MessageController::delete' => '?',
            'App\\Controller\\MessageController::detail' => '?',
            'App\\Controller\\MessageController::edit' => '?',
            'App\\Controller\\MessageController::index' => '?',
            'App\\Controller\\MessageController::new' => '?',
            'App\\Controller\\MessageController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\ReviewController::delete' => '?',
            'App\\Controller\\ReviewController::edit' => '?',
            'App\\Controller\\ReviewController::index' => '?',
            'App\\Controller\\ReviewController::new' => '?',
            'App\\Controller\\ReviewController::show' => '?',
            'App\\Controller\\TravelPreferencesController::delete' => '?',
            'App\\Controller\\TravelPreferencesController::edit' => '?',
            'App\\Controller\\TravelPreferencesController::index' => '?',
            'App\\Controller\\TravelPreferencesController::show' => '?',
            'App\\Controller\\TripController::delete' => '?',
            'App\\Controller\\TripController::details' => '?',
            'App\\Controller\\TripController::edit' => '?',
            'App\\Controller\\TripController::finish' => '?',
            'App\\Controller\\TripController::index' => '?',
            'App\\Controller\\TripController::routeRequest' => '?',
            'App\\Controller\\TripController::search' => '?',
            'App\\Controller\\TripController::show' => '?',
            'App\\Controller\\TripController::start' => '?',
            'App\\Controller\\TripController::treatment' => '?',
            'App\\Controller\\TypeOfVehiculeController::delete' => '?',
            'App\\Controller\\TypeOfVehiculeController::edit' => '?',
            'App\\Controller\\TypeOfVehiculeController::index' => '?',
            'App\\Controller\\TypeOfVehiculeController::show' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Controller\\UserController::viewProfile' => '?',
            'App\\Controller\\VehiculeController::delete' => '?',
            'App\\Controller\\VehiculeController::edit' => '?',
            'App\\Controller\\VehiculeController::index' => '?',
            'App\\Controller\\VehiculeController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminController:index' => '?',
            'App\\Controller\\AuthenticatorController:forgetPasswordReset' => '?',
            'App\\Controller\\AuthenticatorController:login' => '?',
            'App\\Controller\\AuthenticatorController:resetPassword' => '?',
            'App\\Controller\\AuthenticatorController:sendEmail' => '?',
            'App\\Controller\\BookingController:delete' => '?',
            'App\\Controller\\BookingController:index' => '?',
            'App\\Controller\\BookingController:new' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\MessageController:delete' => '?',
            'App\\Controller\\MessageController:detail' => '?',
            'App\\Controller\\MessageController:edit' => '?',
            'App\\Controller\\MessageController:index' => '?',
            'App\\Controller\\MessageController:new' => '?',
            'App\\Controller\\MessageController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\ReviewController:delete' => '?',
            'App\\Controller\\ReviewController:edit' => '?',
            'App\\Controller\\ReviewController:index' => '?',
            'App\\Controller\\ReviewController:new' => '?',
            'App\\Controller\\ReviewController:show' => '?',
            'App\\Controller\\TravelPreferencesController:delete' => '?',
            'App\\Controller\\TravelPreferencesController:edit' => '?',
            'App\\Controller\\TravelPreferencesController:index' => '?',
            'App\\Controller\\TravelPreferencesController:show' => '?',
            'App\\Controller\\TripController:delete' => '?',
            'App\\Controller\\TripController:details' => '?',
            'App\\Controller\\TripController:edit' => '?',
            'App\\Controller\\TripController:finish' => '?',
            'App\\Controller\\TripController:index' => '?',
            'App\\Controller\\TripController:routeRequest' => '?',
            'App\\Controller\\TripController:search' => '?',
            'App\\Controller\\TripController:show' => '?',
            'App\\Controller\\TripController:start' => '?',
            'App\\Controller\\TripController:treatment' => '?',
            'App\\Controller\\TypeOfVehiculeController:delete' => '?',
            'App\\Controller\\TypeOfVehiculeController:edit' => '?',
            'App\\Controller\\TypeOfVehiculeController:index' => '?',
            'App\\Controller\\TypeOfVehiculeController:show' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:show' => '?',
            'App\\Controller\\UserController:viewProfile' => '?',
            'App\\Controller\\VehiculeController:delete' => '?',
            'App\\Controller\\VehiculeController:edit' => '?',
            'App\\Controller\\VehiculeController:index' => '?',
            'App\\Controller\\VehiculeController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
