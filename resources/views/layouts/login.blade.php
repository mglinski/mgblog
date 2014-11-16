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
		Login - mglinski.com
		@show</title>

		@section('site-head')
			@include('partials.head')
		@show
	</head>

	<body>
		<!-- Top Site Nav -->
		@include('partials.top-nav')

		<div class="container">

			<div class="row">
				<div class="col-sm-12">
					<h1 id="overview" class="page-header">Login</h1>
				</div>
			</div>

			<div class="row">

				<!-- #site-content -->
				<div class="col-xs-12  col-sm-6 col-sm-offset-3  col-md-4 col-md-offset-4  col-lg-4 col-lg-offset-4 ">
					@section('site-content')
					@show
				</div><!-- /#site-content -->

			</div><!-- /.row -->
		</div><!-- /.container -->

		<!-- Site Footer -->
        @include('partials.site-footer')

		<!-- Site JavaScript -->
		@section('partials.foot')
			@include('partials.foot')
		@show

	</body>
</html>
