<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Ecommerce</title>
		@include('frontend.common.style')
		@stack('css')
	</head>
	<body>
		@include('frontend.common.sidebar')
		@include('frontend.common.header')

		<div class="loader-bg">
			<div class="loader-track">
				<div class="loader-fill"></div>
			</div>
		</div>
		
	</body>
	<!-- @include('frontend.common.header') -->
	@yield('content')
	@include('frontend.common.footer')
	@include('frontend.common.script')
	@yield('js')
</html>