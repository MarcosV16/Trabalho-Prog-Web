<?php namespace App\Controllers;

class BlocosDeletar extends BaseController 
{
    public function index()
    {
        $blocoModel = new \App\Models\BlocoModel();
        $data['blocos'] = $blocoModel->findAll(); // Busca todas as salas

        echo view('blocosdel', $data);
    }
}
