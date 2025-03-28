<?php

namespace Container3FSM8sb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHomeControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MbWBn3P.App\Controller\HomeController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MbWBn3P.App\\Controller\\HomeController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'articlesRepository' => ['privates', 'App\\Repository\\ArticlesRepository', 'getArticlesRepositoryService', true],
        ], [
            'articlesRepository' => 'App\\Repository\\ArticlesRepository',
        ]))->withContext('App\\Controller\\HomeController::index()', $container);
    }
}
