<?php namespace App\Controllers;

class Author extends BaseController
{
	public function index()
	{
		return view('auths/login');
	}

	public function pizzaList()
	{
		return view('index');
	}
	public function signUpForm()
	{
		return view('auths/register');
	}
	
	//--------------------------------------------------------------------

}
