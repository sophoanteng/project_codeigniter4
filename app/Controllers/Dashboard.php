<?php namespace App\Controllers;
 use App\Models\PizzaModel;
class Dashboard extends BaseController
{
    public function index()
	{
		$pizzaModel = new PizzaModel();
		$data['pizzas']=$pizzaModel->findAll();
		return view('index',$data);
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
			
			

				$pizzaModel = new PizzaModel();
				$pizzaName = $this->request->getVar('name');	
				$pizzaIngredient = $this->request->getVar('ingredients');
				$pizzaPrice = $this->request->getVar('price')."$";
				$pizzaData = array(
					'name'=>$pizzaName,
					'price'=>$pizzaPrice,
					'ingredients'=>$pizzaIngredient,
				);
				$pizzaModel->insert($pizzaData);
				return redirect()->to('/index');
		}
		
	}

	public function deletePizza($id)
	{
		$pizzaModel = new PizzaModel();
		$pizzaModel ->delete($id);
		return redirect()->to('/index');
	}

	public function editPizza($id)
	{
		$pizzaModel = new PizzaModel();
		$pizzaModel ->edit($id);
        return redirect()->to('/index');
	}



}
    


