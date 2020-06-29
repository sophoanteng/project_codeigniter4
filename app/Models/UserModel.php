<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['email', 'password', 'address'];

    public function insertData($validation)
    {
       $this->insert([
           'email' => $validation['email'],
           'password' => $validation['password'],
           'address' => $validation['address']
       ]);
    }
}
