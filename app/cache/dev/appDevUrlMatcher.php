<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/shrimps')) {
            // main_homepage
            if (rtrim($pathinfo, '/') === '/shrimps') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'main_homepage');
                }

                return array (  '_controller' => 'Natali\\ShrimpsBundle\\Controller\\DefaultController::mainAction',  '_route' => 'main_homepage',);
            }

            // tiger_homepage
            if ($pathinfo === '/shrimps/tiger.html') {
                return array (  '_controller' => 'Natali\\ShrimpsBundle\\Controller\\TigerController::tigerAction',  '_route' => 'tiger_homepage',);
            }

            // sri_lanka_dwarf_homepage
            if ($pathinfo === '/shrimps/sri_lanka_dwarf.html') {
                return array (  '_controller' => 'Natali\\ShrimpsBundle\\Controller\\SriLankaDwarfController::sriLankaDwarfAction',  '_route' => 'sri_lanka_dwarf_homepage',);
            }

            // blue_tail_homepage
            if ($pathinfo === '/shrimps/blue_tail.html') {
                return array (  '_controller' => 'Natali\\ShrimpsBundle\\Controller\\BlueTailController::blueTailAction',  '_route' => 'blue_tail_homepage',);
            }

        }

        // natalia_hello_homepage
        if (0 === strpos($pathinfo, '/hw/hello') && preg_match('#^/hw/hello/(?P<firstname>[^/]++)/(?P<lastname>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'natalia_hello_homepage')), array (  '_controller' => 'Natalia\\HelloBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/PanTadeusz')) {
            // natalia_tadeusz_homepage
            if (rtrim($pathinfo, '/') === '/PanTadeusz') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'natalia_tadeusz_homepage');
                }

                return array (  '_controller' => 'Natalia\\TadeuszBundle\\Controller\\DefaultController::indexAction',  '_route' => 'natalia_tadeusz_homepage',);
            }

            // natalia_tadeusz_book
            if (0 === strpos($pathinfo, '/PanTadeusz/Book') && preg_match('#^/PanTadeusz/Book/(?P<book>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'natalia_tadeusz_book')), array (  '_controller' => 'Natalia\\TadeuszBundle\\Controller\\DefaultController::bookAction',));
            }

            if (0 === strpos($pathinfo, '/PanTadeusz/Reflections')) {
                // natalia_tadeusz_reflections_add
                if ($pathinfo === '/PanTadeusz/Reflections/Add') {
                    return array (  '_controller' => 'Natalia\\TadeuszBundle\\Controller\\ReflectionsController::addAction',  '_route' => 'natalia_tadeusz_reflections_add',);
                }

                // natalia_tadeusz_reflections_index
                if (rtrim($pathinfo, '/') === '/PanTadeusz/Reflections') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'natalia_tadeusz_reflections_index');
                    }

                    return array (  '_controller' => 'Natalia\\TadeuszBundle\\Controller\\ReflectionsController::indexAction',  '_route' => 'natalia_tadeusz_reflections_index',);
                }

                // natalia_tadeusz_reflections_show
                if (0 === strpos($pathinfo, '/PanTadeusz/Reflections/Show') && preg_match('#^/PanTadeusz/Reflections/Show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'natalia_tadeusz_reflections_show')), array (  '_controller' => 'Natalia\\TadeuszBundle\\Controller\\ReflectionsController::showAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
