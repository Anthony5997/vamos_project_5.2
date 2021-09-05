<?php

namespace Container6C7inPx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTravelPreferencesTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\TravelPreferencesType' shared autowired service.
     *
     * @return \App\Form\TravelPreferencesType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/TravelPreferencesType.php';

        return $container->privates['App\\Form\\TravelPreferencesType'] = new \App\Form\TravelPreferencesType();
    }
}
