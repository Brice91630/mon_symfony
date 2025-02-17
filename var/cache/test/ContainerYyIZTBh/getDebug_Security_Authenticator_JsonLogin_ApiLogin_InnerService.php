<?php

namespace ContainerYyIZTBh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Security_Authenticator_JsonLogin_ApiLogin_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'debug.security.authenticator.json_login.api_login.inner' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/JsonLoginAuthenticator.php';

        $a = ($container->privates['security.authentication.success_handler.api_login.json_login'] ?? $container->load('getSecurity_Authentication_SuccessHandler_ApiLogin_JsonLoginService'));

        if (isset($container->privates['debug.security.authenticator.json_login.api_login.inner'])) {
            return $container->privates['debug.security.authenticator.json_login.api_login.inner'];
        }
        $b = ($container->privates['security.authentication.failure_handler.api_login.json_login'] ?? $container->load('getSecurity_Authentication_FailureHandler_ApiLogin_JsonLoginService'));

        if (isset($container->privates['debug.security.authenticator.json_login.api_login.inner'])) {
            return $container->privates['debug.security.authenticator.json_login.api_login.inner'];
        }

        $container->privates['debug.security.authenticator.json_login.api_login.inner'] = $instance = new \Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator(($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService')), $a, $b, ['check_path' => '/api/login', 'use_forward' => false, 'login_path' => '/login', 'username_path' => 'username', 'password_path' => 'password'], ($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)));

        if ($container->has('translator')) {
            $instance->setTranslator(($container->services['translator'] ?? self::getTranslatorService($container)));
        }

        return $instance;
    }
}
