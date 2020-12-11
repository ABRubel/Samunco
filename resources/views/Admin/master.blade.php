<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Ecommerce</title>
		@include('admin.common.style')
		@stack('css')
	</head>
	<body>
		@include('admin.common.sidebar')
		@include('admin.common.header')

		<div class="loader-bg">
			<div class="loader-track">
				<div class="loader-fill"></div>
			</div>
		</div>
		
	</body>
	<!-- @include('admin.common.header') -->
	@yield('content')
	@include('admin.common.footer')
	@include('admin.common.script')
	@yield('js')
</html>