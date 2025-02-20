<?php

namespace ContainerMS3z0ro;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegisterControllerregisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5SuUxla.App\Controller\RegisterController::register()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5SuUxla.App\\Controller\\RegisterController::register()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'passwordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'passwordHasher' => '?',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\RegisterController::register()', $container);
    }
}
