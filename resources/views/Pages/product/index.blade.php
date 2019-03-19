<!--Side Bar + content  -->

@extends('layouts.master')

@section('content')
{{-- expr --}}


<div class="container margin-top-20">
<div class="row">
	<div class="col-md-4">

		@include('Partial.product-sidebar')

	</div>


	<div class="col-md-8">

		<div class="widget">
			<h3>ALL Features Products </h3>
			<div class="row">
				
              {{--   @php $i=0; @endphp --}}

                @foreach ($products as $product)
					{{-- expr --}}
				<div class="col-md-3">
				<div class="card">

             {{--  <img class="card-img-top feature-img" src=" {{ asset('Images/Products/'.'I1.jpg') }}" alt="Card image"> --}}

          @foreach($product->images as $image)

        {{--   @if($i > 0) --}}
       <img class="card-img-top feature-img" src=" {{ asset('Images/Products/' . $image->image ) }}" alt="Card image">

         {{--    @endif

            @php $i-- ; @endphp  --}}


             @endforeach
					
                    <div class="card-body">

					 <h4 class="card-title">{{$product->title}}</h4>
						<p class="card-text">Taka {{$product->price}}</p>
						  <a href="#" class="btn btn-outline-warning">Add to cart</a>
						  </div>
					</div>
				</div>
				@endforeach

			</div>
		</div>
		

		<div class="widget">

		</div>

	</div>
</div>
</div>

<!--Side Bar + content  -->



		<div class="widget">

		</div>

	</div>
</div>
</div>

@endsection