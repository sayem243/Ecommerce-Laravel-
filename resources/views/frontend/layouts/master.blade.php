<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce</title>

@include('frontend.Partial.style')

</head>

<body>

<div class="wrapper">
	

		
@include('frontend.Partial.nav')	

<!--end Navbar -->


<!--End sideBar + content  --> 


@yield('content')


@include('frontend.Partial.footer')


</div>


@include('frontend.Partial.script')

</body>

</html>
