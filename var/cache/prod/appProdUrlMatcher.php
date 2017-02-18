<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // pig_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pig_homepage');
            }

            return array (  '_controller' => 'PIGBundle\\Controller\\UserController::loginAction',  '_route' => 'pig_homepage',);
        }

        if (0 === strpos($pathinfo, '/clientes')) {
            // clientes_index
            if ($pathinfo === '/clientes') {
                return array (  '_controller' => 'PIGBundle\\Controller\\ClienteController::indexAction',  '_route' => 'clientes_index',);
            }

            // clientes_nuevo
            if ($pathinfo === '/clientes/new') {
                return array (  '_controller' => 'PIGBundle\\Controller\\ClienteController::nuevoClienteAction',  '_route' => 'clientes_nuevo',);
            }

            // clientes_borrar
            if (0 === strpos($pathinfo, '/clientes/delete') && preg_match('#^/clientes/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientes_borrar')), array (  '_controller' => 'PIGBundle\\Controller\\ClienteController::borrarAction',));
            }

            // clientes_todos
            if ($pathinfo === '/clientes/all') {
                return array (  '_controller' => 'PIGBundle\\Controller\\ClienteController::clienteAllAction',  '_route' => 'clientes_todos',);
            }

            // clientes_show
            if (0 === strpos($pathinfo, '/clientes/show') && preg_match('#^/clientes/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientes_show')), array (  '_controller' => 'PIGBundle\\Controller\\ClienteController::clienteShowAction',));
            }

            // clientes_exito
            if ($pathinfo === '/clientes/msgExito') {
                return array (  '_controller' => 'PIGBundle\\Controller\\ClienteController::msgExitoAction',  '_route' => 'clientes_exito',);
            }

        }

        if (0 === strpos($pathinfo, '/trabajadoras')) {
            // trabajadoras_index
            if ($pathinfo === '/trabajadoras') {
                return array (  '_controller' => 'PIGBundle\\Controller\\TrabajadoraController::indexAction',  '_route' => 'trabajadoras_index',);
            }

            // trabajadoras_nueva
            if ($pathinfo === '/trabajadoras/new') {
                return array (  '_controller' => 'PIGBundle\\Controller\\TrabajadoraController::nuevaTrabajadoraAction',  '_route' => 'trabajadoras_nueva',);
            }

            // trabajadoras_borrar
            if (0 === strpos($pathinfo, '/trabajadoras/delete') && preg_match('#^/trabajadoras/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabajadoras_borrar')), array (  '_controller' => 'PIGBundle\\Controller\\TrabajadoraController::borrarAction',));
            }

            // trabajadoras_todas
            if (0 === strpos($pathinfo, '/trabajadoras/show') && preg_match('#^/trabajadoras/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabajadoras_todas')), array (  '_controller' => 'PIGBundle\\Controller\\TrabajadoraController::trabajadoraShowAction',));
            }

            // trabajadoras_horario
            if (0 === strpos($pathinfo, '/trabajadoras/horario') && preg_match('#^/trabajadoras/horario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabajadoras_horario')), array (  '_controller' => 'PIGBundle\\Controller\\TrabajadoraController::trabajadoraHorarioAction',));
            }

            // trabajadoras_exito
            if ($pathinfo === '/trabajadoras/msgExito') {
                return array (  '_controller' => 'PIGBundle\\Controller\\TrabajadoraController::msgExitoAction',  '_route' => 'trabajadoras_exito',);
            }

        }

        if (0 === strpos($pathinfo, '/servicios')) {
            // Servicios_index
            if ($pathinfo === '/servicios') {
                return array (  '_controller' => 'PIGBundle\\Controller\\ServicioController::indexAction',  '_route' => 'Servicios_index',);
            }

            // Servicios_nuevo
            if ($pathinfo === '/servicios/new') {
                return array (  '_controller' => 'PIGBundle\\Controller\\ServicioController::nuevoServicioAction',  '_route' => 'Servicios_nuevo',);
            }

            // Servicios_borrar
            if (0 === strpos($pathinfo, '/servicios/delete') && preg_match('#^/servicios/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Servicios_borrar')), array (  '_controller' => 'PIGBundle\\Controller\\ServicioController::borrarAction',));
            }

            // Servicios_todos
            if ($pathinfo === '/servicios/all') {
                return array (  '_controller' => 'PIGBundle\\Controller\\ServicioController::servicioAllAction',  '_route' => 'Servicios_todos',);
            }

            // Servicios_show
            if (0 === strpos($pathinfo, '/servicios/show') && preg_match('#^/servicios/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Servicios_show')), array (  '_controller' => 'PIGBundle\\Controller\\ServicioController::servicioShowAction',));
            }

            // Servicios_exito
            if ($pathinfo === '/servicios/msgExito') {
                return array (  '_controller' => 'PIGBundle\\Controller\\ServicioController::msgExitoAction',  '_route' => 'Servicios_exito',);
            }

            if (0 === strpos($pathinfo, '/servicios/new')) {
                // Otros_nuevo
                if (0 === strpos($pathinfo, '/servicios/newOtro') && preg_match('#^/servicios/newOtro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Otros_nuevo')), array (  '_controller' => 'PIGBundle\\Controller\\OtroController::nuevoOtroAction',));
                }

                // Mantenimientos_nuevo
                if (0 === strpos($pathinfo, '/servicios/newMantenimiento') && preg_match('#^/servicios/newMantenimiento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Mantenimientos_nuevo')), array (  '_controller' => 'PIGBundle\\Controller\\MantenimientoController::nuevoMantenimientoAction',));
                }

                // Caterings_nuevo
                if (0 === strpos($pathinfo, '/servicios/newCatering') && preg_match('#^/servicios/newCatering/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Caterings_nuevo')), array (  '_controller' => 'PIGBundle\\Controller\\CateringController::nuevoCateringAction',));
                }

                // Limpiezas_nuevo
                if (0 === strpos($pathinfo, '/servicios/newLimpieza') && preg_match('#^/servicios/newLimpieza/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Limpiezas_nuevo')), array (  '_controller' => 'PIGBundle\\Controller\\LimpiezaController::nuevoLimpiezaAction',));
                }

            }

        }

        // usuario_nuevo
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'PIGBundle\\Controller\\UserController::registerAction',  '_route' => 'usuario_nuevo',);
        }

        if (0 === strpos($pathinfo, '/usuarios')) {
            // usuarios_homepage
            if ($pathinfo === '/usuarios') {
                return array (  '_controller' => 'PIGBundle\\Controller\\DefaultController::indexAction',  '_route' => 'usuarios_homepage',);
            }

            // login
            if ($pathinfo === '/usuarios/login') {
                return array (  '_controller' => 'PIGBundle\\Controller\\UserController::loginAction',  '_route' => 'login',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // logout
        if ($pathinfo === '/usuarios/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
