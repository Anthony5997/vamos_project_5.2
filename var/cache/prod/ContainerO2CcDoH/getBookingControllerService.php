<?php

namespace ContainerO2CcDoH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookingControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\BookingController' shared autowired service.
     *
     * @return \App\Controller\BookingController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\BookingController'] = $instance = new \App\Controller\BookingController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\BookingController', $container));

        return $instance;
    }
}
