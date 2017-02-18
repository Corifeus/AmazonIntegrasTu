<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'pig_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\UserController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'clientes_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\ClienteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/clientes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'clientes_nuevo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\ClienteController::nuevoClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/clientes/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'clientes_borrar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\ClienteController::borrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/clientes/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'clientes_todos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\ClienteController::clienteAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/clientes/all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'clientes_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\ClienteController::clienteShowAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/clientes/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'clientes_exito' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\ClienteController::msgExitoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/clientes/msgExito',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trabajadoras_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\TrabajadoraController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trabajadoras',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trabajadoras_nueva' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\TrabajadoraController::nuevaTrabajadoraAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trabajadoras/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trabajadoras_borrar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\TrabajadoraController::borrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/trabajadoras/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trabajadoras_todas' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\TrabajadoraController::trabajadoraShowAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/trabajadoras/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trabajadoras_horario' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\TrabajadoraController::trabajadoraHorarioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/trabajadoras/horario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trabajadoras_exito' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\TrabajadoraController::msgExitoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trabajadoras/msgExito',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Servicios_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\ServicioController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/servicios',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Servicios_nuevo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\ServicioController::nuevoServicioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/servicios/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Servicios_borrar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\ServicioController::borrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/servicios/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Servicios_todos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\ServicioController::servicioAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/servicios/all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Servicios_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\ServicioController::servicioShowAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/servicios/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Servicios_exito' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\ServicioController::msgExitoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/servicios/msgExito',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Otros_nuevo' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\OtroController::nuevoOtroAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/servicios/newOtro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Mantenimientos_nuevo' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\MantenimientoController::nuevoMantenimientoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/servicios/newMantenimiento',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Caterings_nuevo' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\CateringController::nuevoCateringAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/servicios/newCatering',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Limpiezas_nuevo' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\LimpiezaController::nuevoLimpiezaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/servicios/newLimpieza',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_nuevo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\UserController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuarios_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuarios',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PIGBundle\\Controller\\UserController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuarios/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuarios/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
