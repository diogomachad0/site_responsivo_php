<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\ClientModel;

class Client extends BaseController
{
    private $ClientModel;

    public function __construct()
    {
        $this->ClientModel = new ClientModel();
    }

    public function list()
    {
        $data = [
            'clients' => $this->ClientModel->findAll()
        ];
        return json_encode($data);
    }
}