<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //CRUD
    //LISTAR
    public function listarCategoria(){
        //$categorias = Categoria::all();
        $categorias = Categoria::orderBy('created_at','asc')->get();

        return response()->json(
            [
                'success'=> true,
                'nombre' => 'Diego Lipa',
                'data' => $categorias
            ]
            );
    }

    public function agregarCategoria(){

    }

    public function editarCategoria(){

    }

    public function eliminarCategoria(){

    }

}
