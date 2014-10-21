<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{ $site_name.' | '.$page_title }}</title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="{{ $site_description }}" />
	<meta name="author" content="{{ $site_description }}" />
	<link rel="icon" href="{{ asset('favicon.ico'); }}" />

	<!-- Bootstrap core CSS -->
	{{ HTML::style('assets/css/bootstrap.min.css'); }}

	<!-- Custom styles -->
	@foreach ($custom_styles as $style)
	{{ HTML::style('assets/css/'.$style); }}
	@endforeach

</head>
<body>
	<div class="container">
		@yield('content')
	</div> <!-- /container -->

	<!-- AngularJS -->
	{{ HTML::script('assets/js/angular.min.js'); }}
</body>
</html>
