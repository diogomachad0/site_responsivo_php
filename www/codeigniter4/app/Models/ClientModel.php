<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientModel extends Model{

    protected $table = 'clients';
    protected $primaryKey = 'idClient';
    protected $allowedFields = [
        'name', 'email', 'phone', 'address'
    ];

    public function getUser($userName)
  {
    return $this->where('user', $userName)->first();
  }

  public function getClientsFor($search)
  {
    return $this->asArray()
      ->like('id_client', $search)
      ->orLike('name', $search)
      ->orLike('phone', $search)
      ->orLike('email', $search)
      ->orLike('address', $search)
      ->findAll();
  }
}
