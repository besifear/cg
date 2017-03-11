<!DOCTYPE html>
<html lang="en">
	<head>
		@include('partials.head-content')
	</head>
	<body>
		<div class="container">
			@include('partials.header')			
			@yield('top-content')
			@yield('content-seperator')
			@yield('bottom-content')
			@include('partials.footer')
		</div>
	</body>
</html>