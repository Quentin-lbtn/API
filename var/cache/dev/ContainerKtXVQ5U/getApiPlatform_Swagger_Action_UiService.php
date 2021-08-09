<?php

namespace ContainerKtXVQ5U;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Swagger_Action_UiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'api_platform.swagger.action.ui' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\Action\SwaggerUiAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Action/SwaggerUiAction.php';

        return $container->services['api_platform.swagger.action.ui'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\Action\SwaggerUiAction(($container->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($container->services['.container.private.serializer'] ?? $container->get_Container_Private_SerializerService()), ($container->services['.container.private.twig'] ?? $container->load('get_Container_Private_TwigService')), ($container->services['router'] ?? $container->getRouterService()), '', '', '0.0.0', $container->parameters['api_platform.formats'], false, '', '', 'oauth2', 'application', '', '', [], true, true, true, false, false, false, $container->parameters['api_platform.swagger.versions'], ($container->services['api_platform.swagger_ui.action'] ?? $container->load('getApiPlatform_SwaggerUi_ActionService')), NULL);
    }
}