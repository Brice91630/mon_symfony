<?php

namespace Container4lG32ux;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHomeControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.07r4iw_.App\Controller\HomeController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.07r4iw_.App\\Controller\\HomeController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'articlesRepository' => ['privates', 'App\\Repository\\ArticlesRepository', 'getArticlesRepositoryService', true],
            'mongoDBService' => ['privates', '.errored..service_locator.07r4iw_.App\\Services\\MongoDBService', NULL, 'Cannot autowire service ".service_locator.07r4iw_": it references class "App\\Services\\MongoDBService" but no such service exists. Did you mean "App\\services\\MongoDBService"?'],
        ], [
            'articlesRepository' => 'App\\Repository\\ArticlesRepository',
            'mongoDBService' => 'App\\Services\\MongoDBService',
        ]))->withContext('App\\Controller\\HomeController::index()', $container);
    }
}
