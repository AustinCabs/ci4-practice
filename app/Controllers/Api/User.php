<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController; //dont forget if your on  folder

class User extends BaseController
{
	public function index()
	{
		echo '<h1> Api User Index</h1>';
	}


	public function fetch()
	{
		echo '<h1> Api User Fetch  GET Request</h1>';
	}
	
	public function show($val,$val2)
	{
		echo '<h1> Api User show  GET Request with Parameter 1 : '.$val.'</h1>';
		echo '<h1> Api User show  GET Request with Parameter 2 : '.$val2.'</h1>';
	}
	
	public function create()
	{	
		echo '<pre>';
		echo print_r($_POST);
		echo '<pre>';
	}
	
}
