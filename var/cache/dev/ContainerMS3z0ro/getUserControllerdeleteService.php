<?php

namespace ContainerMS3z0ro;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CQIMZqF.App\Controller\UserController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CQIMZqF.App\\Controller\\UserController::delete()'] = ($container->privates['.service_locator.CQIMZqF'] ?? $container->load('get_ServiceLocator_CQIMZqFService'))->withContext('App\\Controller\\UserController::delete()', $container);
    }
}
