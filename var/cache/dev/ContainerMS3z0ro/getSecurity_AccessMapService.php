<?php

namespace ContainerMS3z0ro;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AccessMapService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMap.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/ChainRequestMatcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcher/PathRequestMatcher.php';

        $container->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $a = new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/articles/\\d+/commentaire/create')]);
        $b = new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/commentaire/\\d+/edit')]);
        $c = new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/commentaire/\\d+/delete')]);

        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/login')]), ['PUBLIC_ACCESS'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/logout')]), ['PUBLIC_ACCESS'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/users/new')]), ['PUBLIC_ACCESS'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/users')]), ['ROLE_ADMIN'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/articles/new')]), ['ROLE_ADMIN'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/articles/edit')]), ['ROLE_ADMIN'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/articles')]), ['PUBLIC_ACCESS'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/articles/page')]), ['IS_AUTHENTICATED_FULLY'], NULL);
        $instance->add($a, ['ROLE_USER'], NULL);
        $instance->add($a, ['ROLE_ADMIN'], NULL);
        $instance->add($b, ['ROLE_USER'], NULL);
        $instance->add($b, ['ROLE_ADMIN'], NULL);
        $instance->add($c, ['ROLE_USER'], NULL);
        $instance->add($c, ['ROLE_ADMIN'], NULL);

        return $instance;
    }
}
