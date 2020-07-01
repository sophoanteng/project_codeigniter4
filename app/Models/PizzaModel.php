<?php namespace App\Models;
use CodeIgniter\Model;
class PizzaModel extends Model
{
    protected $table      = 'pizza';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $allowedFields = ['name','price' ,'ingredients'];

    public function listPizza($user)
    {
        $this->insert([
                'name'=>$user['name'],
                'price'=>$user['price'],
                'ingredients'=>$user['ingredients'],
               
        
                
        ]);
    }


}


    
