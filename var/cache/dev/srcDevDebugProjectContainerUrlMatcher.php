<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/api')) {
            // api_entrypoint
            if (preg_match('#^/api(?:/(?P<index>index)(?:\\.(?P<_format>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_entrypoint')), array (  '_controller' => 'api_platform.action.entrypoint',  '_format' => '',  '_api_respond' => '1',  'index' => 'index',));
            }

            // api_doc
            if (0 === strpos($pathinfo, '/api/docs') && preg_match('#^/api/docs(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_doc')), array (  '_controller' => 'api_platform.action.documentation',  '_api_respond' => '1',  '_format' => '',));
            }

            if (0 === strpos($pathinfo, '/api/co')) {
                // api_jsonld_context
                if (0 === strpos($pathinfo, '/api/contexts') && preg_match('#^/api/contexts/(?P<shortName>.+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_jsonld_context')), array (  '_controller' => 'api_platform.jsonld.action.context',  '_api_respond' => '1',  '_format' => 'jsonld',));
                }

                if (0 === strpos($pathinfo, '/api/comunidades')) {
                    // api_comunidades_get_collection
                    if (preg_match('#^/api/comunidades(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_comunidades_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Comunidades',  '_api_collection_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_comunidades_get_collection;
                        }

                        return $ret;
                    }
                    not_api_comunidades_get_collection:

                    // api_comunidades_post_collection
                    if (preg_match('#^/api/comunidades(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_comunidades_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Comunidades',  '_api_collection_operation_name' => 'post',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_api_comunidades_post_collection;
                        }

                        return $ret;
                    }
                    not_api_comunidades_post_collection:

                    // api_comunidades_get_item
                    if (preg_match('#^/api/comunidades/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_comunidades_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Comunidades',  '_api_item_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_comunidades_get_item;
                        }

                        return $ret;
                    }
                    not_api_comunidades_get_item:

                    // api_comunidades_delete_item
                    if (preg_match('#^/api/comunidades/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_comunidades_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Comunidades',  '_api_item_operation_name' => 'delete',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_api_comunidades_delete_item;
                        }

                        return $ret;
                    }
                    not_api_comunidades_delete_item:

                    // api_comunidades_put_item
                    if (preg_match('#^/api/comunidades/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_comunidades_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Comunidades',  '_api_item_operation_name' => 'put',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_api_comunidades_put_item;
                        }

                        return $ret;
                    }
                    not_api_comunidades_put_item:

                }

                elseif (0 === strpos($pathinfo, '/api/colonias')) {
                    // api_colonias_get_collection
                    if (preg_match('#^/api/colonias(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_colonias_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Colonia',  '_api_collection_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_colonias_get_collection;
                        }

                        return $ret;
                    }
                    not_api_colonias_get_collection:

                    // api_colonias_post_collection
                    if (preg_match('#^/api/colonias(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_colonias_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Colonia',  '_api_collection_operation_name' => 'post',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_api_colonias_post_collection;
                        }

                        return $ret;
                    }
                    not_api_colonias_post_collection:

                    // api_colonias_get_item
                    if (preg_match('#^/api/colonias/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_colonias_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Colonia',  '_api_item_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_colonias_get_item;
                        }

                        return $ret;
                    }
                    not_api_colonias_get_item:

                    // api_colonias_delete_item
                    if (preg_match('#^/api/colonias/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_colonias_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Colonia',  '_api_item_operation_name' => 'delete',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_api_colonias_delete_item;
                        }

                        return $ret;
                    }
                    not_api_colonias_delete_item:

                    // api_colonias_put_item
                    if (preg_match('#^/api/colonias/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_colonias_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Colonia',  '_api_item_operation_name' => 'put',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_api_colonias_put_item;
                        }

                        return $ret;
                    }
                    not_api_colonias_put_item:

                }

            }

            elseif (0 === strpos($pathinfo, '/api/censo-municipios')) {
                // api_censo_municipios_get_collection
                if (preg_match('#^/api/censo\\-municipios(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_censo_municipios_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\CensoMunicipio',  '_api_collection_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_censo_municipios_get_collection;
                    }

                    return $ret;
                }
                not_api_censo_municipios_get_collection:

                // api_censo_municipios_post_collection
                if (preg_match('#^/api/censo\\-municipios(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_censo_municipios_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\CensoMunicipio',  '_api_collection_operation_name' => 'post',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_api_censo_municipios_post_collection;
                    }

                    return $ret;
                }
                not_api_censo_municipios_post_collection:

                // api_censo_municipios_get_item
                if (preg_match('#^/api/censo\\-municipios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_censo_municipios_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\CensoMunicipio',  '_api_item_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_censo_municipios_get_item;
                    }

                    return $ret;
                }
                not_api_censo_municipios_get_item:

                // api_censo_municipios_delete_item
                if (preg_match('#^/api/censo\\-municipios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_censo_municipios_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\CensoMunicipio',  '_api_item_operation_name' => 'delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_api_censo_municipios_delete_item;
                    }

                    return $ret;
                }
                not_api_censo_municipios_delete_item:

                // api_censo_municipios_put_item
                if (preg_match('#^/api/censo\\-municipios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_censo_municipios_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\CensoMunicipio',  '_api_item_operation_name' => 'put',));
                    if (!in_array($requestMethod, array('PUT'))) {
                        $allow = array_merge($allow, array('PUT'));
                        goto not_api_censo_municipios_put_item;
                    }

                    return $ret;
                }
                not_api_censo_municipios_put_item:

            }

            elseif (0 === strpos($pathinfo, '/api/t')) {
                if (0 === strpos($pathinfo, '/api/territorios')) {
                    // api_territorios_get_collection
                    if (preg_match('#^/api/territorios(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_territorios_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Territorio',  '_api_collection_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_territorios_get_collection;
                        }

                        return $ret;
                    }
                    not_api_territorios_get_collection:

                    // api_territorios_post_collection
                    if (preg_match('#^/api/territorios(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_territorios_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Territorio',  '_api_collection_operation_name' => 'post',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_api_territorios_post_collection;
                        }

                        return $ret;
                    }
                    not_api_territorios_post_collection:

                    // api_territorios_get_item
                    if (preg_match('#^/api/territorios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_territorios_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Territorio',  '_api_item_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_territorios_get_item;
                        }

                        return $ret;
                    }
                    not_api_territorios_get_item:

                    // api_territorios_delete_item
                    if (preg_match('#^/api/territorios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_territorios_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Territorio',  '_api_item_operation_name' => 'delete',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_api_territorios_delete_item;
                        }

                        return $ret;
                    }
                    not_api_territorios_delete_item:

                    // api_territorios_put_item
                    if (preg_match('#^/api/territorios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_territorios_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Territorio',  '_api_item_operation_name' => 'put',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_api_territorios_put_item;
                        }

                        return $ret;
                    }
                    not_api_territorios_put_item:

                }

                elseif (0 === strpos($pathinfo, '/api/temp-users')) {
                    // api_temp_users_get_collection
                    if (preg_match('#^/api/temp\\-users(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_temp_users_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TempUser',  '_api_collection_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_temp_users_get_collection;
                        }

                        return $ret;
                    }
                    not_api_temp_users_get_collection:

                    // api_temp_users_get_item
                    if (preg_match('#^/api/temp\\-users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_temp_users_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TempUser',  '_api_item_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_temp_users_get_item;
                        }

                        return $ret;
                    }
                    not_api_temp_users_get_item:

                }

                elseif (0 === strpos($pathinfo, '/api/tipo-propiedads')) {
                    // api_tipo_propiedads_get_collection
                    if (preg_match('#^/api/tipo\\-propiedads(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_propiedads_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoPropiedad',  '_api_collection_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_tipo_propiedads_get_collection;
                        }

                        return $ret;
                    }
                    not_api_tipo_propiedads_get_collection:

                    // api_tipo_propiedads_post_collection
                    if (preg_match('#^/api/tipo\\-propiedads(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_propiedads_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoPropiedad',  '_api_collection_operation_name' => 'post',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_api_tipo_propiedads_post_collection;
                        }

                        return $ret;
                    }
                    not_api_tipo_propiedads_post_collection:

                    // api_tipo_propiedads_get_item
                    if (preg_match('#^/api/tipo\\-propiedads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_propiedads_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoPropiedad',  '_api_item_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_tipo_propiedads_get_item;
                        }

                        return $ret;
                    }
                    not_api_tipo_propiedads_get_item:

                    // api_tipo_propiedads_delete_item
                    if (preg_match('#^/api/tipo\\-propiedads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_propiedads_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoPropiedad',  '_api_item_operation_name' => 'delete',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_api_tipo_propiedads_delete_item;
                        }

                        return $ret;
                    }
                    not_api_tipo_propiedads_delete_item:

                    // api_tipo_propiedads_put_item
                    if (preg_match('#^/api/tipo\\-propiedads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_propiedads_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoPropiedad',  '_api_item_operation_name' => 'put',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_api_tipo_propiedads_put_item;
                        }

                        return $ret;
                    }
                    not_api_tipo_propiedads_put_item:

                }

                elseif (0 === strpos($pathinfo, '/api/tipo-edificios')) {
                    // api_tipo_edificios_get_collection
                    if (preg_match('#^/api/tipo\\-edificios(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_edificios_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoEdificio',  '_api_collection_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_tipo_edificios_get_collection;
                        }

                        return $ret;
                    }
                    not_api_tipo_edificios_get_collection:

                    // api_tipo_edificios_post_collection
                    if (preg_match('#^/api/tipo\\-edificios(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_edificios_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoEdificio',  '_api_collection_operation_name' => 'post',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_api_tipo_edificios_post_collection;
                        }

                        return $ret;
                    }
                    not_api_tipo_edificios_post_collection:

                    // api_tipo_edificios_get_item
                    if (preg_match('#^/api/tipo\\-edificios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_edificios_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoEdificio',  '_api_item_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_tipo_edificios_get_item;
                        }

                        return $ret;
                    }
                    not_api_tipo_edificios_get_item:

                    // api_tipo_edificios_delete_item
                    if (preg_match('#^/api/tipo\\-edificios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_edificios_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoEdificio',  '_api_item_operation_name' => 'delete',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_api_tipo_edificios_delete_item;
                        }

                        return $ret;
                    }
                    not_api_tipo_edificios_delete_item:

                    // api_tipo_edificios_put_item
                    if (preg_match('#^/api/tipo\\-edificios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_edificios_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoEdificio',  '_api_item_operation_name' => 'put',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_api_tipo_edificios_put_item;
                        }

                        return $ret;
                    }
                    not_api_tipo_edificios_put_item:

                }

            }

            elseif (0 === strpos($pathinfo, '/api/emplazamientos')) {
                // api_emplazamientos_get_collection
                if (preg_match('#^/api/emplazamientos(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_emplazamientos_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Emplazamiento',  '_api_collection_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_emplazamientos_get_collection;
                    }

                    return $ret;
                }
                not_api_emplazamientos_get_collection:

                // api_emplazamientos_post_collection
                if (preg_match('#^/api/emplazamientos(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_emplazamientos_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Emplazamiento',  '_api_collection_operation_name' => 'post',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_api_emplazamientos_post_collection;
                    }

                    return $ret;
                }
                not_api_emplazamientos_post_collection:

                // api_emplazamientos_get_item
                if (preg_match('#^/api/emplazamientos/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_emplazamientos_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Emplazamiento',  '_api_item_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_emplazamientos_get_item;
                    }

                    return $ret;
                }
                not_api_emplazamientos_get_item:

                // api_emplazamientos_delete_item
                if (preg_match('#^/api/emplazamientos/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_emplazamientos_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Emplazamiento',  '_api_item_operation_name' => 'delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_api_emplazamientos_delete_item;
                    }

                    return $ret;
                }
                not_api_emplazamientos_delete_item:

                // api_emplazamientos_put_item
                if (preg_match('#^/api/emplazamientos/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_emplazamientos_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Emplazamiento',  '_api_item_operation_name' => 'put',));
                    if (!in_array($requestMethod, array('PUT'))) {
                        $allow = array_merge($allow, array('PUT'));
                        goto not_api_emplazamientos_put_item;
                    }

                    return $ret;
                }
                not_api_emplazamientos_put_item:

            }

            elseif (0 === strpos($pathinfo, '/api/visitas-colonias')) {
                // api_visitas_colonias_get_collection
                if (preg_match('#^/api/visitas\\-colonias(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_visitas_colonias_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\VisitasColonia',  '_api_collection_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_visitas_colonias_get_collection;
                    }

                    return $ret;
                }
                not_api_visitas_colonias_get_collection:

                // api_visitas_colonias_post_collection
                if (preg_match('#^/api/visitas\\-colonias(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_visitas_colonias_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\VisitasColonia',  '_api_collection_operation_name' => 'post',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_api_visitas_colonias_post_collection;
                    }

                    return $ret;
                }
                not_api_visitas_colonias_post_collection:

                // api_visitas_colonias_get_item
                if (preg_match('#^/api/visitas\\-colonias/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_visitas_colonias_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\VisitasColonia',  '_api_item_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_visitas_colonias_get_item;
                    }

                    return $ret;
                }
                not_api_visitas_colonias_get_item:

                // api_visitas_colonias_delete_item
                if (preg_match('#^/api/visitas\\-colonias/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_visitas_colonias_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\VisitasColonia',  '_api_item_operation_name' => 'delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_api_visitas_colonias_delete_item;
                    }

                    return $ret;
                }
                not_api_visitas_colonias_delete_item:

                // api_visitas_colonias_put_item
                if (preg_match('#^/api/visitas\\-colonias/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_visitas_colonias_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\VisitasColonia',  '_api_item_operation_name' => 'put',));
                    if (!in_array($requestMethod, array('PUT'))) {
                        $allow = array_merge($allow, array('PUT'));
                        goto not_api_visitas_colonias_put_item;
                    }

                    return $ret;
                }
                not_api_visitas_colonias_put_item:

            }

            elseif (0 === strpos($pathinfo, '/api/poblaciones')) {
                // api_poblaciones_get_collection
                if (preg_match('#^/api/poblaciones(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_poblaciones_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Poblaciones',  '_api_collection_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_poblaciones_get_collection;
                    }

                    return $ret;
                }
                not_api_poblaciones_get_collection:

                // api_poblaciones_post_collection
                if (preg_match('#^/api/poblaciones(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_poblaciones_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Poblaciones',  '_api_collection_operation_name' => 'post',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_api_poblaciones_post_collection;
                    }

                    return $ret;
                }
                not_api_poblaciones_post_collection:

                // api_poblaciones_get_item
                if (preg_match('#^/api/poblaciones/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_poblaciones_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Poblaciones',  '_api_item_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_poblaciones_get_item;
                    }

                    return $ret;
                }
                not_api_poblaciones_get_item:

                // api_poblaciones_delete_item
                if (preg_match('#^/api/poblaciones/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_poblaciones_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Poblaciones',  '_api_item_operation_name' => 'delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_api_poblaciones_delete_item;
                    }

                    return $ret;
                }
                not_api_poblaciones_delete_item:

                // api_poblaciones_put_item
                if (preg_match('#^/api/poblaciones/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_poblaciones_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Poblaciones',  '_api_item_operation_name' => 'put',));
                    if (!in_array($requestMethod, array('PUT'))) {
                        $allow = array_merge($allow, array('PUT'));
                        goto not_api_poblaciones_put_item;
                    }

                    return $ret;
                }
                not_api_poblaciones_put_item:

            }

            elseif (0 === strpos($pathinfo, '/api/l')) {
                if (0 === strpos($pathinfo, '/api/loc-nidos-cols')) {
                    // api_loc_nidos_cols_get_collection
                    if (preg_match('#^/api/loc\\-nidos\\-cols(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loc_nidos_cols_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\LocNidosCol',  '_api_collection_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_loc_nidos_cols_get_collection;
                        }

                        return $ret;
                    }
                    not_api_loc_nidos_cols_get_collection:

                    // api_loc_nidos_cols_post_collection
                    if (preg_match('#^/api/loc\\-nidos\\-cols(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loc_nidos_cols_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\LocNidosCol',  '_api_collection_operation_name' => 'post',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_api_loc_nidos_cols_post_collection;
                        }

                        return $ret;
                    }
                    not_api_loc_nidos_cols_post_collection:

                    // api_loc_nidos_cols_get_item
                    if (preg_match('#^/api/loc\\-nidos\\-cols/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loc_nidos_cols_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\LocNidosCol',  '_api_item_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_loc_nidos_cols_get_item;
                        }

                        return $ret;
                    }
                    not_api_loc_nidos_cols_get_item:

                    // api_loc_nidos_cols_delete_item
                    if (preg_match('#^/api/loc\\-nidos\\-cols/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loc_nidos_cols_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\LocNidosCol',  '_api_item_operation_name' => 'delete',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_api_loc_nidos_cols_delete_item;
                        }

                        return $ret;
                    }
                    not_api_loc_nidos_cols_delete_item:

                    // api_loc_nidos_cols_put_item
                    if (preg_match('#^/api/loc\\-nidos\\-cols/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loc_nidos_cols_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\LocNidosCol',  '_api_item_operation_name' => 'put',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_api_loc_nidos_cols_put_item;
                        }

                        return $ret;
                    }
                    not_api_loc_nidos_cols_put_item:

                }

                // api_login_anonymous
                if ('/api/loginAnonymous' === $pathinfo) {
                    $ret = array (  '_controller' => 'App\\Controller\\TempUserController::login',  '_api_resource_class' => 'App\\Entity\\TempUser',  '_route' => 'api_login_anonymous',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_api_login_anonymous;
                    }

                    return $ret;
                }
                not_api_login_anonymous:

                // api_list_col
                if ('/api/listCol' === $pathinfo) {
                    $ret = array (  '_controller' => 'App\\Controller\\SeoApisController::listCol',  '_route' => 'api_list_col',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_list_col;
                    }

                    return $ret;
                }
                not_api_list_col:

                // api_list_no_col
                if ('/api/listNoCol' === $pathinfo) {
                    $ret = array (  '_controller' => 'App\\Controller\\SeoApisController::listNoCol',  '_route' => 'api_list_no_col',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_list_no_col;
                    }

                    return $ret;
                }
                not_api_list_no_col:

            }

        }

        elseif (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
