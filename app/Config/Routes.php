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
<div class="col-md-4">
                <div class="card shadow-sm">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="card-title fs-5 fw-bold">' . $categoria['nombre_categoria'] . '</div>
                      <div class="badge bg-dark"></div>
                    </div>
                    <p>
                    
                    </p>
                  </div>
                  <div class="card-footer d-flex justify-content-between align-items-center">
                    <div class="fst-italic">' . date('d F Y', strtotime($categoria['created_at'])) . '</div>
                    <div>
                      <a href="#" id="' . $categoria['id'] . '" data-bs-toggle="modal" data-bs-target="#edit_post_modal" class="btn btn-success btn-sm post_edit_btn">Edit</a>

                      <a href="#" id="' . $categoria['id'] . '" class="btn btn-danger btn-sm post_delete_btn">Delete</a>
                    </div>
                  </div>
                </div>
              </div>
*/
             
