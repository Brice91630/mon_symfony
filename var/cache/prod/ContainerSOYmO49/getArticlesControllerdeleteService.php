<?php

namespace ContainerSOYmO49;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticlesControllerdeleteService extends App_KernelProdDebugContainer
{
    /**
     * Gets the private '.service_locator.xqghpMM.App\Controller\ArticlesController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xqghpMM.App\\Controller\\ArticlesController::delete()'] = ($container->privates['.service_locator.xqghpMM'] ?? $container->load('get_ServiceLocator_XqghpMMService'))->withContext('App\\Controller\\ArticlesController::delete()', $container);
    }
}
