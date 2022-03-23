<?php 
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ClienteModel;

class Cliente extends ResourceController{
    protected $modelName = 'App\Models\ClienteModel';
    protected $format = 'json';

    public function index(){
        $data=[
            "clientes" => $this->model->findAll()
        ];
        return $this->respond($data);
    }
}

?>