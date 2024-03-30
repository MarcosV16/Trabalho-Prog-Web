<?php namespace App\Models;

use CodeIgniter\Model; 
class BlocoModel extends Model {
    protected $table = 'Bloco';
    protected $primaryKey = 'sala_id'; // armazena o nome da chave primária
    protected $allowedFields = ['nome' ,'lugares', 'computadores']; // quais campos serão permitidos manipulação dentro da tabela, se tiver mais é só listar no array
    protected $returnType = 'array'; // object ou array

}