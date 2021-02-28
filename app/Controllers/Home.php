<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	
	public function access()
	{
		$shop = new Shop();
		echo $shop->product('cabanada','austin');
	}

	public function user()
	{
		return view('user');
	}

	
}
