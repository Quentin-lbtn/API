<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/blog' => [[['_route' => 'blog_list', '_controller' => 'App\\Controller\\BlogController::list'], null, null, null, false, false, null]],
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\NewController::homepage'], null, null, null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:42)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:72)'
                        .'|co(?'
                            .'|ntexts/(.+)(?:\\.([^/]++))?(*:110)'
                            .'|mmunes(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:145)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:183)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:224)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        42 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        72 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        110 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        145 => [
            [['_route' => 'api_communes_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Communes', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_communes_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Communes', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        183 => [
            [['_route' => 'api_communes_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Communes', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_communes_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Communes', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_communes_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Communes', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_communes_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Communes', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        224 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
