<?php namespace App\Controllers;
 use App\Models\UserModel;
class Author extends BaseController
{
	public function loginForm()
	{
        $data=[];
        helper(['form']);

        if($this->request->getMethod() == "post"){
			$rules = [
				'email' =>'required|valid_email',
				'password'=>'required',	
            ];
            $errors = [
				'password' => [
					'validateUser' => 'Password don\'t match'
                ]
            ];
            if(!$this->validate($rules,$errors)){
            
                $data['validation'] = $this->validator; 
            }else{
                $pizzaData = new UserModel();

				$dataUser = $pizzaData->where('email', $this->request->getVar('email'))->first();
				$this->setSession($dataUser);
				return redirect()->to('index');
            }
        }

		return view('auths/login',$data);
    }


    private function setSession($dataUser){

		$data = [
			'id' => $dataUser['id'],
			'email' => $dataUser['email'],
			'password' => $dataUser['password'],
			'address' => $dataUser['address'],
			'roles' => $dataUser['roles'],
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}

	public function registerForm()
	{
        $data=[];
        helper(['form']);

        if($this->request->getMethod() == "post"){
			$rules = [
				'email' =>'required|valid_email',
				'password'=>'required',
				'address'=>'required',
            ];
     
        if(!$this->validate($rules)){
            
				$data['validation'] = $this->validator; 
			}else{
                $user = new UserModel();
                $dataOfDb = [
					'email' =>$this->request->getVar('email'),
					'password' =>$this->request->getVar('password'),
                    'address' =>$this->request->getVar('address'),
                    'roles' =>$this->request->getVar('roles'),
                    
                ];
                $user->createUser($dataOfDb);
                $session = session();
				$session->setFlashdata('success', 'Success Of Register!!!');
				return redirect()->to('/');
            }
        }


		return view('auths/register',$data);


	//--------------------------------------------------------------------

}
}
