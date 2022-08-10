<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->get('/unidades', 'Unidades::index');
$routes->get('unidades_inactivos', 'Unidades::inactivos');
$routes->get('unidades_editar/(:num)', 'Unidades::editar/$1');
$routes->get('unidades_activar/(:num)', 'Unidades::activar/$1');
$routes->get('unidades_desactivar/(:num)', 'Unidades::desactivar/$1');
$routes->get('unidades_agregar', 'Unidades::nuevo');
$routes->post('unidades_insertar', 'Unidades::insertar');
$routes->post('unidades_actualizar', 'Unidades::actualizar');
$routes->get('unidades_eliminar/(:num)', 'Unidades::eliminar/$1');

$routes->get('/categorias', 'Categoria::index');
$routes->get('categorias_agregar', 'Categoria::nuevo');
$routes->post('categorias_insertar', 'Categoria::insertar');
$routes->get('categorias_editar/(:num)', 'Categoria::editar/$1');
$routes->get('categorias_activar/(:num)', 'Categoria::activar/$1');
$routes->get('categorias_desactivar/(:num)', 'Categoria::desactivar/$1');
$routes->get('categorias_inactivos', 'Categoria::inactivos');
$routes->post('categorias_actualizar', 'Categoria::actualizar');
$routes->get('categorias_eliminar/(:num)', 'Categoria::eliminar/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
