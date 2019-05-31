<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\ProductImage;

use Image;

class ProductsController extends Controller
{
        public function index(){

        $products=product::orderBy('id','desc')->get();

        return view('backend.pages.product.index')->with('products', $products);
    }


      public function create(){

        return view('backend.pages.product.create');
    }


    
     public function edit($id){

        $products=product::find($id);

        return view('backend.pages.product.edit')->with('products',$products);
    }



      public function store(Request $request ){

    	
      	//validation

      	  $request->validate([
            'title'        => 'required|max:150',
            'description'  => 'required',
            'price'        => 'required|numeric',
            'quantity'     => 'required|numeric',
        ]);






      	//end validation


    	$product = new Product;

    	$product->title = $request->title;
    	$product->description = $request->description;
    	$product->price=$request->price;
    	$product->quantity=$request->quantity;
    	
    	$product->slug =str_slug($request->title);
    	$product->category_id=1;
    	$product->brand_id=1;
    	$product->backend_id=1;

    	$product->save();


    	

    	if(count($request->product_image)>0){

    		foreach($request->product_image as $image){
    			
    			
    		//insert Image
    		//$image= $request->file('product_image');
    		$img=time() .'.'. $image->getClientOriginalExtension();
    		$location = public_path('Images/Products/' .$img);

    		Image::make($image)->save($location);

    		$product_image = new ProductImage;
    		$product_image->product_id=$product->id;
    		$product_image->image = $img;
    		$product_image->save();	
    		


    			
    	}
}

    	return redirect()->route('admin.product.create') ;

    }



      public function update(Request $request ,$id){

        
        //validation

          $request->validate([
            'title'        => 'required|max:150',
            'description'  => 'required',
            'price'        => 'required|numeric',
            'quantity'     => 'required|numeric',
        ]);






        //end validation




        $product =  Product::find($id);

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        
       

        $product->save();


        return redirect()->route('admin.products') ;

    }


    public function delete($id){

     $product = Product::find($id);

     if(!is_null($product)){
        $product->delete();
     }

     session()->flash('success', 'Product has Successfully Delete ');
     return back();

    }


//php artisan config:cache
//php artisan view:clear
//composer dump-autoload







}


