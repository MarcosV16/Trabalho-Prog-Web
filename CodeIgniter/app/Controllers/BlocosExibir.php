<?php namespace App\Controllers;

class BlocosExibir extends BaseController 
{
    public function index()
    {
        $blocoModel = new \App\Models\BlocoModel();
        $data['blocos'] = $blocoModel->findAll(); // Busca todas as salas

        echo view('blocos_exibir', $data);
    }
}
