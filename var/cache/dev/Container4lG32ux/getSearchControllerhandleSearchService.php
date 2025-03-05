<?php

namespace Container4lG32ux;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchControllerhandleSearchService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._K5MRDO.App\Controller\SearchController::handleSearch()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._K5MRDO.App\\Controller\\SearchController::handleSearch()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'repo' => ['privates', 'App\\Repository\\ArticlesRepository', 'getArticlesRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\ArticlesRepository',
        ]))->withContext('App\\Controller\\SearchController::handleSearch()', $container);
    }
}
