<?php

namespace Container5AOvmTd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XqghpMMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xqghpMM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xqghpMM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'article' => ['privates', '.errored..service_locator.xqghpMM.App\\Entity\\Articles', NULL, 'Cannot autowire service ".service_locator.xqghpMM": it needs an instance of "App\\Entity\\Articles" but this type has been excluded in "config/services.yaml".'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'article' => 'App\\Entity\\Articles',
            'em' => '?',
        ]);
    }
}
