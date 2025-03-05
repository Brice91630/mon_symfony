<?php

namespace Container3FSM8sb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Security_RequestMatcher_XhVN0lvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.security.request_matcher.XhVN0lv' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\ChainRequestMatcher
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/ChainRequestMatcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcher/PathRequestMatcher.php';

        return $container->privates['.security.request_matcher.XhVN0lv'] = new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/api/users/new')]);
    }
}
