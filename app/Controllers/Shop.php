<?php

namespace App\Controllers;

class Shop extends BaseController
{
	public function index()
	{
		return view('shop');
	}

	public function product($val, $val2)
	{
		echo '<h1>The value is '.$val.'</h1>';
		echo '<h1>The value 2 is '.$val2.'</h1>';
		// return view('product');
	}
}
