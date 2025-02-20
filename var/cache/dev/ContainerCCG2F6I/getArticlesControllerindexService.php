<?php

namespace ContainerCCG2F6I;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticlesControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EtQatbL.App\Controller\ArticlesController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EtQatbL.App\\Controller\\ArticlesController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'articleRepository' => ['privates', 'App\\Repository\\ArticlesRepository', 'getArticlesRepositoryService', true],
        ], [
            'articleRepository' => 'App\\Repository\\ArticlesRepository',
        ]))->withContext('App\\Controller\\ArticlesController::index()', $container);
    }
}
