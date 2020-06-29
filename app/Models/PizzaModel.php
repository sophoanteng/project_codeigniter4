<?php namespace App\Models;

use CodeIgniter\Model;

class PizzaModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['name', 'price', 'ingredients'];

    // public function insertData($validation)
    // {
    //    $this->insert([
    //        'email' => $validation['email'],
    //        'password' => $validation['password'],
    //        'address' => $validation['address']
    //    ]);
    // }
}
