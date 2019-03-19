<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class PagesController extends Controller
{
    
	public function index(){
		return view('Pages.index');


	}

	 public function contact()
	{
		return view('Pages.contact');
	}

	 public function products()
	{	
		$products=product::orderBy('id','desc')->get();
		return view('Pages.product.index')->with('products',$products);
	}


}
