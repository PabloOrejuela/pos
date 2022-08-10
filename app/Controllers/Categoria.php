<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Categoria extends BaseController {

    protected $categorias;

    public function index($estado = 1){
        $categorias = $this->categoriaModel->where('estado', $estado)->findAll();
        //echo '<pre>'.var_export($categorias, true).'</pre>';

        $data = [
            'title' => 'Categorias',
            'main_content' => 'categorias/categorias_list',
            'categorias' => $categorias
        ];
        return view('includes/template', $data);
    }

    public function inactivos($estado = 0){
        $categorias = $this->categoriaModel->where('estado', $estado)->findAll();
        //echo '<pre>'.var_export($categorias, true).'</pre>';

        $data = [
            'title' => 'Categorias Inactivas',
            'main_content' => 'categorias/categorias_inactivos_list',
            'categorias' => $categorias
        ];
        return view('includes/template', $data);
    }

    public function eliminar($id) {
        $this->categoriaModel->delete($id);
        return redirect()->to(site_url().'categorias');
    }

    public function nuevo() {
        
        $data = [
            'title' => 'Agregar categoria',
            'main_content' => 'categorias/categorias_nuevo',
        ];
        return view('includes/template', $data);
    }

    public function insertar() {
        
        $this->categoriaModel->save([
            'cat_nombre' => strtoupper($this->request->getPostGet('cat_nombre')),
        ]);
        return redirect()->to(site_url().'categorias');
    }

    public function editar($id) {

        $categoria = $this->categoriaModel->where('id', $id)->first();
        $data = [
            'title' => 'Editar categoria',
            'main_content' => 'categorias/categorias_editar',
            'categoria' => $categoria
        ];
        return view('includes/template', $data);
    }

    public function actualizar() {
        
        $this->categoriaModel->save([
            'id' => $this->request->getPostGet('id'),
            'cat_nombre' => strtoupper($this->request->getPostGet('cat_nombre')),
        ]);
        return redirect()->to(site_url().'categorias');
    }

    public function activar($id) {
        
        $this->categoriaModel->save([
            'id' => $id,
            'estado' => 1,
        ]);
        return redirect()->to(site_url().'categorias');
    }

    public function desactivar($id) {
        
        $this->categoriaModel->save([
            'id' => $id,
            'estado' => 0,
        ]);
        return redirect()->to(site_url().'categorias');
    }
}
