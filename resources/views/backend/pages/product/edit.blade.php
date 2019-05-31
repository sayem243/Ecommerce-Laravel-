@extends('backend.layout.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit Products
        </div>
        <div class="card-body">
          <form action="{{ route('admin.product.update',$products->id) }}" method="post"   enctype="multipart/form-data">
            {{ csrf_field() }}

             {{-- error message show --}}
             @include('backend.partials.messages')


            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$products->title}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <textarea name="description" rows="8" cols="80" class="form-control">{{$products->description}}</textarea>

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Price</label>
              <input type="number" class="form-control" name="price" id="exampleInputEmail1" value=" {{$products->price}} ">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Quantity</label>
              <input type="number" class="form-control" name="quantity"  value="{{$products->quantity}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Product Images</label>

                <div class="row">

              <div class="col-md-4">
              <input type="file" class="form-control" name="product_image[]" id="product_image">
             </div>

               <div class="col-md-4">
              <input type="file" class="form-control" name="product_image[]" id="product_image">
             </div>

               <div class="col-md-4">
              <input type="file" class="form-control" name="product_image[]" id="product_image">
             </div>

               <div class="col-md-4">
              <input type="file" class="form-control" name="product_image[]" id="product_image">
             </div>




             </div>

            </div>

            <button type="submit" class="btn btn-primary">Update Product</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection