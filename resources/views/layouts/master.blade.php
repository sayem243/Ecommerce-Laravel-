<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce</title>

@include('Partial.style')

</head>

<body>

<div class="wrapper">
	

		
@include('Partial.nav')	

<!--end Navbar -->


<!--End sideBar + content  --> 


@yield('content')


@include('Partial.footer')


</div>


@include('Partial.script')

</body>

</html>
