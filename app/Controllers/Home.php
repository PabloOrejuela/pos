<?php

namespace App\Controllers;

class Home extends BaseController {
    public function index() {

        $data['version'] = $this->CI_VERSION;

        $data['title']='POS';
        $data['main_content']='contenido';
        return view('includes/template', $data);
    }
}
