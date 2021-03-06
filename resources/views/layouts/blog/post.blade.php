{{--  --}}
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="/favicon.ico">

		<title>
		@section('site-title')
		MGBlog
		@show</title>

		@section('site-head')
			@include('......partials.head')
		@show
	</head>

	<body>
		<!-- Top Site Nav -->
		@include('......partials.top-nav')

		<div class="container">

			<!-- Site Header -->
			@include('......partials.site-header')

			<div class="row">

				<!-- #site-content -->
				<div class="col-sm-8 blog-main">
					@section('site-content')
					@show
				</div><!-- /#site-content -->

				<!-- #site-sidebar -->
				@section('site-sidebar.main')
					@include('......partials.sidebar.main')
				@show
				<!-- /.site-sidebar -->

			</div><!-- /.row -->
		</div><!-- /.container -->

		<!-- Site JavaScript -->
		@section('partials.foot')
			@include('......partials.foot')
		@show

	</body>
</html>
