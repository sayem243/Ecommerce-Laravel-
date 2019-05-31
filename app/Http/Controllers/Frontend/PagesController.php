<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Product;


class PagesController extends Controller
{
    
	public function index(){
		return view('frontend.Pages.index');


	}

	 public function contact()
	{
		return view('frontend.Pages.contact');
	}

	 public function products()
	{	
		$products=product::orderBy('id','desc')->get();
		return view('Pages.product.index')->with('products',$products);
	}


}
