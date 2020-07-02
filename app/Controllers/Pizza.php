<?php namespace App\Controllers;
 use App\Models\PizzaModel;
class Pizza extends BaseController
{
    public function index()
	{
		$pizzaDb = new PizzaModel();
		$data['pizzas']=$pizzaDb->findAll();
		return view('index', $data);
	}

	public function addPizza(){
		$data = [];
		if($this->request->getMethod() == "post"){
			helper(['form']);
			$rules = [
                'name'=>'required',
				'price'=>'required|min_length[1]|max_length[50]',
                'ingredients'=>'required',
				
			];
			  $errors = [
				'ingredients' => [
					'validateUser' => 'name,ingredient or price don\'t match'
                ]
                
			];
				$pizzaDb = new PizzaModel();
				$pizzaName = $this->request->getVar('name');	
				$pizzaIngredient = $this->request->getVar('ingredients');
				$pizzaPrice = $this->request->getVar('price')."$";
				$pizzaData = array(
					'name'=>$pizzaName,
					'price'=>$pizzaPrice,
					'ingredients'=>$pizzaIngredient,
				);
				$pizzaDb->insert($pizzaData);
				return redirect()->to('/index');
		}
		
	}




	public function deletePizza($id)
	{
		$pizzaDb = new PizzaModel();
		$pizzaDb ->delete($id);
		return redirect()->to('/index');
	}

	public function editPizza($id)
	{
		$pizzaDb = new PizzaModel();
		$data['editPizzaData'] = $pizzaDb->find($id);
        return view('/index', $data);
	}
	public function updatePizza()
	{
		$pizzaDb = new PizzaModel();
		$pizzaDb->update($_POST['id'], $_POST);
		return redirect()->to('/index');
	}



}
    


