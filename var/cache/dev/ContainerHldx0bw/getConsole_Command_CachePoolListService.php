<?php

namespace ContainerHldx0bw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_CachePoolListService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolListCommand.php';

        $container->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand([0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'cache.validator_expression_language', 7 => 'cache.security_expression_language', 8 => 'cache.doctrine.orm.default.result', 9 => 'cache.doctrine.orm.default.query', 10 => 'api_platform.cache.route_name_resolver', 11 => 'api_platform.cache.identifiers_extractor', 12 => 'api_platform.cache.subresource_operation_factory', 13 => 'api_platform.cache.metadata.resource', 14 => 'api_platform.cache.metadata.property']);

        $instance->setName('cache:pool:list');
        $instance->setDescription('List available cache pools');

        return $instance;
    }
}
