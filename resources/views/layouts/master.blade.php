<!-- index -->

<html>
<head>
	<script
			  src="https://code.jquery.com/jquery-3.1.1.min.js"
			  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			  crossorigin="anonymous"></script>
	<script rel="javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
	<script rel="javascript" src="{{ url('/js/chosen.jquery.min.js') }}"></script>
	<link rel="stylesheet" href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ url('/css/chosen.css') }}" />
</head>
<body>
	@include('partials.navbar')
	
	<div class="contingut">
	@yield('contingut')
	</div>
</body>

</html>
