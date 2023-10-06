<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Categoria;

class CategoriaController extends BaseController
{
    public function index() {

       return view('categorias/index');
    }

     // agregar nueva categoria
     public function agregar() {
       

        $datos = [
            'nombre_categoria' => $this->request->getPost('nombre_categoria'),
            'created_at' => date('Y-m-d H:i:s')
        ];

       
            $ModelCateg = new Categoria();
            $ModelCateg->save($datos);
            return $this->response->setJSON([
                'error' => false,
                'message' => 'Categoría agregada exitosamente !!!'
            ]);
        
    }


     // mostrar categorias
     public function mostrar() {
        $ModelCateg = new Categoria();
        $categorias = $ModelCateg->findAll();
        $datos = '';

        if ($categorias) {
            foreach ($categorias as $categoria) {
                $datos .= '<tr>
                <td>' . $categoria['id'] . '</td>
                <td>' . $categoria['nombre_categoria'] . '</td>
                <td>' . date('d F Y', strtotime($categoria['created_at'])) . '</td>
                <td><a href="#" id="' . $categoria['id'] . '" data-bs-toggle="modal" data-bs-target="#edit_post_modal" class="btn btn-warning btn-sm post_edit_btn">Edit</a></td>
                <td><a href="#" id="' . $categoria['id'] . '" class="btn btn-danger btn-sm post_delete_btn">Delete</a></td>
                </tr>';
            }
            return $this->response->setJSON([
                'error' => false,
                'message' => $datos
            ]);
        } else {
            return $this->response->setJSON([
                'error' => false,
                'message' => '<div class="text-secondary text-center fw-bold my-5">Aun no hay categorías...</div>'
            ]);
        }
    }





}
