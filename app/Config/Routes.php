<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'CategoriaController::index');
$routes->get('categorias', 'CategoriaController::index', ['as'=>'categorias_index']);
$routes->post('categoria/agregar', 'CategoriaController::agregar', ['as'=>'agregar_categoria']);
$routes->get('categoria/mostrar', 'CategoriaController::mostrar', ['as'=>'mostrar_categoria']);
$routes->get('categoria/editar/(:num)', 'CategoriaController::editar/$1', ['as'=>'editar_categoria']);
$routes->get('categoria/eliminar/(:num)', 'CategoriaController::eliminar/$1', ['as'=>'eliminar_categoria']);
$routes->post('categoria/actualizar', 'CategoriaController::actualizar', ['as'=>'actualizar_categoria']);

/*
$routes->get('productos', 'ProductoController::index', ['as'=>'producto_index']);
$routes->post('producto/agregar', 'ProductoController::agregar', ['as'=>'agregar_producto']);
$routes->get('producto/mostrar', 'ProductoController::mostrar', ['as'=>'mostrar_producto']);
$routes->get('producto/editar/(:num)', 'ProductoController::editar/$1', ['as'=>'editar_producto']);
$routes->get('producto/eliminar/(:num)', 'ProductoController::eliminar/$1', ['as'=>'eliminar_producto']);
$routes->post('producto/actualizar', 'ProductoController::actualizar', ['as'=>'actualizar_producto']);
*/

       