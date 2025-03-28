<?php

namespace ContainerSOYmO49;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Command_DebugFirewallService extends App_KernelProdDebugContainer
{
    /**
     * Gets the private 'security.command.debug_firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Command/DebugFirewallCommand.php';

        $container->privates['security.command.debug_firewall'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand($container->parameters['security.firewalls'], ($container->privates['.service_locator.NKp6VjU'] ?? self::get_ServiceLocator_NKp6VjUService($container)), ($container->privates['.service_locator.9SvtZc1'] ?? $container->load('get_ServiceLocator_9SvtZc1Service')), ['main' => [($container->privates['debug.security.authenticator.form_login.main'] ?? $container->load('getDebug_Security_Authenticator_FormLogin_MainService'))], 'api_login' => [($container->privates['debug.security.authenticator.json_login.api_login'] ?? $container->load('getDebug_Security_Authenticator_JsonLogin_ApiLoginService'))], 'api_users_new' => [($container->privates['debug.security.authenticator.json_login.api_users_new'] ?? $container->load('getDebug_Security_Authenticator_JsonLogin_ApiUsersNewService'))]], false);

        $instance->setName('debug:firewall');
        $instance->setDescription('Display information about your security firewall(s)');

        return $instance;
    }
}
