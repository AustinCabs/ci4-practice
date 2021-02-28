<?php

namespace App\Controllers;

class Crud extends BaseController
{
	public function index()
	{	$data =[
		'title' => 'CRUD | Austin',
		'heading' => 'CRUD Table'
		]; 
		// echo 'CRUD Index ';
		return view('crud',$data);
	}

	public function save_user()
	{	
		print_r($_POST);

	}

	

	
}
