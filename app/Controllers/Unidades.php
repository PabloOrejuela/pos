<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Unidades extends BaseController {

    protected $unidades;

    // public function __construct(){
    //     $this->unidades = $this->unidadModel();
    // }

    public function index($estado = 1){
        $unidades = $this->unidadModel->where('estado', $estado)->findAll();
        //echo '<pre>'.var_export($unidades, true).'</pre>';

        $data = [
            'title' => 'Unidades',
            'main_content' => 'unidades/unidades_list',
            'unidades' => $unidades
        ];
        return view('includes/template', $data);
    }

    public function editar($id) {
        //PABLO estoy en video 2 1:12:10
        echo $id;
    }

    public function eliminar($id) {
        echo $id;
    }

    public function nuevo() {
        
        $data = [
            'title' => 'Agregar unidad',
            'main_content' => 'unidades/unidades_nuevo',
        ];
        return view('includes/template', $data);
    }
}
