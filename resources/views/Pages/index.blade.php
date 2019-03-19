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
					<h3>Features Products </h3>
					<div class="row">
						<div class="col-md-3">
						<div class="card">
						 <img class="card-img-top feature-img" src=" {{ asset('Images/Products/'.'glaxy9.jpg') }}" alt="Card image">
							<div class="card-body">
							 <h4 class="card-title">Glaxy-s9</h4>
								<p class="card-text">Taka 50k Only</p>
								  <a href="#" class="btn btn-outline-warning">Add to cart</a>
								  </div>
							</div>
						</div>
							<div class="col-md-3">
						<div class="card">
						 <img class="card-img-top feature-img" src=" {{ asset('Images/Products/'.'glaxy9.jpg') }}" alt="Card image">
							<div class="card-body">
							 <h4 class="card-title">Glaxy-s9</h4>
								<p class="card-text">Taka 50k Only</p>
								  <a href="#" class="btn btn-outline-warning">Add to cart</a>
								  </div>
							</div>
						</div>
							<div class="col-md-3">
						<div class="card">
						 <img class="card-img-top feature-img" src=" {{ asset('Images/Products/'.'iphone.jpg') }}" alt="Card image">
							<div class="card-body">
							 <h4 class="card-title">Iphone-x</h4>
								<p class="card-text">Taka 1 lack Only</p>
								  <a href="#" class="btn btn-outline-warning">Add to cart</a>
								  </div>
							</div>
						</div>
							<div class="col-md-3">
						<div class="card">
						 <img class="card-img-top feature-img" src=" {{ asset('Images/Products/'.'OnePlus_6T.png') }}" alt="Card image">
							<div class="card-body">
							 <h4 class="card-title">One pLuse</h4>
								<p class="card-text">Taka 50k Only</p>
								  <a href="#" class="btn btn-outline-warning">Add to cart</a>
								  </div>
							</div>
						</div>
							<div class="col-md-3">
						<div class="card">
						 <img class="card-img-top feature-img" src=" {{ asset('Images/Products/'.'OnePlus_6T.png') }}" alt="Card image">
							<div class="card-body">
							 <h4 class="card-title">One pLuse</h4>
								<p class="card-text">Taka 50k Only</p>
								  <a href="#" class="btn btn-outline-warning">Add to cart</a>
								  </div>
							</div>
						</div>


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