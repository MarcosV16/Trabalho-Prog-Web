<?php namespace App\Controllers;

class Blocos extends BaseController 
{
    public function index()
    {
        $blocoModel = new \App\Models\BlocoModel();
        $data['blocos'] = $blocoModel->findAll(); // Fetches all records from the 'Bloco' table
        
        return view('blocos_form', $data); // Sends data to the 'blocos_form' view
    }
    
    public function inserir()
    {
        $data['titulo'] = 'Inserir nova sala';
        $data['acao'] = 'Inserir';
        $data['msg'] = ''; // Initializes the $msg variable
        
        if ($this->request->getMethod() === 'post') {
            $blocoModel = new \App\Models\BlocoModel();
            
            // Retrieving POST data
            $nome = $this->request->getPost('nome');
            $lugares = $this->request->getPost('lugares');
            $computadores = $this->request->getPost('computadores');

            // Validating data before inserting into the database
            if (!empty($nome) && !empty($lugares) && !empty($computadores)) {
                // Setting data for insertion
                $dataToInsert = [
                    'nome' => $nome,
                    'lugares' => $lugares,
                    'computadores' => $computadores
                ];

                // Inserting data into the 'Bloco' table
                if ($blocoModel->insert($dataToInsert)) {
                    $data['msg'] = 'Dados inseridos com sucesso';
                } else {
                    $data['msg'] = 'Erro ao inserir dados';
                }
            } else {
                $data['msg'] = 'Campos obrigatórios não preenchidos';
            }
        }
        
        return view('blocos_form', $data); // Renders the 'blocos_form' view with data
    }
    
    public function deletar($id)
    {
        $data['titulo'] = 'Deletar sala';
        $data['acao'] = 'Deletar';
        $data['msg'] = ''; // Initializes the $msg variable

        $blocoModel = new \App\Models\BlocoModel();

        if (!empty($id) && is_numeric($id)) {
            $bloco = $blocoModel->find($id);

            if ($bloco) {
                if ($blocoModel->delete($id)) {

                    // Exclusão bem-sucedida, redirecione para a página desejada
                return redirect()->to('http://arteemusica.mus.br/sistema/adsgrupo10/CodeIgniter/public/index.php/blocos/deletar');

                } else {
                    $data['msg'] = 'Erro ao excluir sala';
                }
            } else {
                $data['msg'] = 'Sala não encontrada';
                return view('blocos_del', $data);
            }
        } else {
            $data['msg'] = 'ID inválido';
        }

        return view('blocos_del', $data);
    }
}
