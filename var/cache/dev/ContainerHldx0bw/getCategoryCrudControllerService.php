<?php

namespace ContainerHldx0bw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\CategoryCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\CategoryCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/CategoryCrudController.php';

        $container->services['App\\Controller\\Admin\\CategoryCrudController'] = $instance = new \App\Controller\Admin\CategoryCrudController();

        $instance->setContainer(($container->privates['.service_locator.opmh_Hv'] ?? $container->load('get_ServiceLocator_OpmhHvService'))->withContext('App\\Controller\\Admin\\CategoryCrudController', $container));

        return $instance;
    }
}
