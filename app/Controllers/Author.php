<?php namespace App\Controllers;
 use App\Models\PizzaModel;
class Author extends BaseController
{
	public function formLogin()
	{
        return view('auths/login');
    }
    
	public function formRegister()
	{
        helper(['form']);
	$pizza = new UserModel();
     $data = [];
    if($this->request->getMethod() == "post"){
    $rules = [
        'name'=>'required',
		'price'=>'required|min_length[1]|max_length[50]',
		'ingredients'=>'required',
			 ];
			 if($this->validate($rules)){
              $email= $this->request->getVar('email');
              $password = $this->request->getVar('password');
              $address = $this->request->getVar('address');
              $pizzaData = array(
               'email'=>$email,
               'password'=>$password,
               'address'=>$address
                 );
                 $pizza->insertData($pizzaData);
               return redirect()->to("/");
                }
            else{
           $data['messages'] = $this->validator;
             return view('auths/register',$data);

             }
          }
    return view('auths/register');
	}
	public function viewPizza()
	{
        $data = [];
        $pizzaModel = new PizzaModel();
        $dataOfPizza['dataPizza']= $pizzaModel->findAll();
    return view('index', $dataOfPizza);
    // return view('index');
		
    }
    
	
       
	//--------------------------------------------------------------------

}
