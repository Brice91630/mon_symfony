<?php

namespace ContainerCCG2F6I;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_FixturesLoadCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.fixtures_load_command' shared service.
     *
     * @return \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/src/Command/LoadDataFixturesDoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/src/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/src/Loader/SymfonyFixturesLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/src/Purger/PurgerFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/src/Purger/ORMPurgerFactory.php';

        $a = new \Doctrine\Bundle\FixturesBundle\Loader\SymfonyFixturesLoader($container);
        $a->addFixtures([]);

        $container->privates['doctrine.fixtures_load_command'] = $instance = new \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand($a, ($container->services['doctrine'] ?? self::getDoctrineService($container)), ['default' => new \Doctrine\Bundle\FixturesBundle\Purger\ORMPurgerFactory()]);

        $instance->setName('doctrine:fixtures:load');

        return $instance;
    }
}
