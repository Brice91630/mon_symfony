<?php

namespace ContainerYyIZTBh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_Manager_ApiUsersNewService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.authenticator.manager.api_users_new' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticatorManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/UserAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManager.php';

        $a = ($container->privates['debug.security.authenticator.json_login.api_users_new'] ?? $container->load('getDebug_Security_Authenticator_JsonLogin_ApiUsersNewService'));

        if (isset($container->privates['security.authenticator.manager.api_users_new'])) {
            return $container->privates['security.authenticator.manager.api_users_new'];
        }

        return $container->privates['security.authenticator.manager.api_users_new'] = new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([$a], ($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), ($container->privates['debug.security.event_dispatcher.api_users_new'] ?? $container->load('getDebug_Security_EventDispatcher_ApiUsersNewService')), 'api_users_new', ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)), true, true, []);
    }
}
