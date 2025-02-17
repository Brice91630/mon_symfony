<?php

namespace ContainerYyIZTBh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticlesControllerpageService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.uOjHxUd.App\Controller\ArticlesController::page()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uOjHxUd.App\\Controller\\ArticlesController::page()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'article' => ['privates', '.errored..service_locator.uOjHxUd.App\\Entity\\Articles', NULL, 'Cannot autowire service ".service_locator.uOjHxUd": it needs an instance of "App\\Entity\\Articles" but this type has been excluded in "config/services.yaml".'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'user' => ['privates', '.errored..service_locator.uOjHxUd.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.uOjHxUd": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create an instantiable class that implements this interface?'],
        ], [
            'article' => 'App\\Entity\\Articles',
            'em' => '?',
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]))->withContext('App\\Controller\\ArticlesController::page()', $container);
    }
}
