<?php

namespace ContainerE6AZ3Qn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5GMm5AjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5GMm5Aj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5GMm5Aj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['privates', '.errored.1hwX6ki', NULL, 'Cannot determine controller argument for "App\\Controller\\ProfileController::deleteProduct()": the $em argument is type-hinted with the non-existent class or interface: "App\\Controller\\EntityManagerInterface". Did you forget to add a use statement?'],
            'user' => ['privates', '.errored.qK21cRJ', NULL, 'Cannot determine controller argument for "App\\Controller\\ProfileController::deleteProduct()": the $user argument is type-hinted with the non-existent class or interface: "App\\Controller\\User". Did you forget to add a use statement?'],
        ], [
            'em' => '?',
            'user' => '?',
        ]);
    }
}
