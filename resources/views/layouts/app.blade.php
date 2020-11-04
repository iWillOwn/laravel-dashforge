<html>
	@include('layouts.header')
	<body>
		@include('components.header')
		@include('components.sidebar')

		@yield('content')
			
		@include('layouts.footer')
	</body>
</html>