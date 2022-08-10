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

    public function inactivos($estado = 0){
        $unidades = $this->unidadModel->where('estado', $estado)->findAll();
        //echo '<pre>'.var_export($unidades, true).'</pre>';

        $data = [
            'title' => 'Unidades',
            'main_content' => 'unidades/unidades_inactivos_list',
            'unidades' => $unidades
        ];
        return view('includes/template', $data);
    }

    public function eliminar($id) {
        $this->unidadModel->delete($id);
        return redirect()->to(site_url().'unidades');
    }

    public function nuevo() {
        
        $data = [
            'title' => 'Agregar unidad',
            'main_content' => 'unidades/unidades_nuevo',
        ];
        return view('includes/template', $data);
    }

    public function insertar() {
        
        $this->unidadModel->save([
            'unidad' => strtoupper($this->request->getPostGet('unidad')),
            'nombre_corto' => $this->request->getPostGet('nombre_corto'),
        ]);
        return redirect()->to(site_url().'unidades');
    }

    public function editar($id) {

        $unidad = $this->unidadModel->where('id', $id)->first();
        $data = [
            'title' => 'Editar unidad',
            'main_content' => 'unidades/unidades_editar',
            'unidad' => $unidad
        ];
        return view('includes/template', $data);
    }

    public function actualizar() {
        
        $this->unidadModel->save([
            'id' => $this->request->getPostGet('id'),
            'unidad' => strtoupper($this->request->getPostGet('unidad')),
            'nombre_corto' => $this->request->getPostGet('nombre_corto'),
        ]);
        return redirect()->to(site_url().'unidades');
    }

    public function activar($id) {
        
        $this->unidadModel->save([
            'id' => $id,
            'estado' => 1,
        ]);
        return redirect()->to(site_url().'unidades');
    }

    public function desactivar($id) {
        
        $this->unidadModel->save([
            'id' => $id,
            'estado' => 0,
        ]);
        return redirect()->to(site_url().'unidades');
    }
}
