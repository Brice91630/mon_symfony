<?php

namespace ContainerYyIZTBh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_FailureHandler_Main_FormLoginService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.authentication.failure_handler.main.form_login' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationFailureHandler.php';

        $a = ($container->services['http_kernel'] ?? self::getHttpKernelService($container));

        if (isset($container->privates['security.authentication.failure_handler.main.form_login'])) {
            return $container->privates['security.authentication.failure_handler.main.form_login'];
        }

        $container->privates['security.authentication.failure_handler.main.form_login'] = $instance = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($a, ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), [], ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)));

        $instance->setOptions(['login_path' => 'app_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        return $instance;
    }
}
