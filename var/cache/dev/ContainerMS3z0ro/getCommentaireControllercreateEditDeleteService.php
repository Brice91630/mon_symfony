<?php

namespace ContainerMS3z0ro;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommentaireControllercreateEditDeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Cj2p88g.App\Controller\CommentaireController::createEditDelete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Cj2p88g.App\\Controller\\CommentaireController::createEditDelete()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'articleRepository' => ['privates', 'App\\Repository\\ArticlesRepository', 'getArticlesRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.Cj2p88g.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.Cj2p88g": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create an instantiable class that implements this interface?'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'articleRepository' => 'App\\Repository\\ArticlesRepository',
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
            'em' => '?',
        ]))->withContext('App\\Controller\\CommentaireController::createEditDelete()', $container);
    }
}
