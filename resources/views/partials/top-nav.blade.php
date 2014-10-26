<div class="navbar navbar-inverse navbar-static-top navbar-default" style="margin-bottom: 0;">

	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">Matthew Glinski</a>
	</div>

	<div class="navbar-collapse collapse navbar-responsive-collapse">
		<ul class="nav navbar-nav">
			<li @if(Request::is('/'))class="active"@endif><a href="{{{ URL::route('home') }}}">Home</a></li>
			<li @if(Request::is('projects') or Request::is('projects/*'))class="active"@endif><a href="#">Projects</a></li>
			<li @if(Request::is('resume'))class="active"@endif><a href="<?=URL::route('resume')?>">Resume</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Links <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="https://twitter.com/mglinski" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
					<li><a href="https://github.com/mglinski" target="_blank"><i class="fa fa-github"></i> Github</a></li>
					<li><a href="https://www.linkedin.com/in/mglinski" target="_blank"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
					<li><a href="https://facebook.com/mglinski" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
				</ul>
			</li>
		</ul>

		<!--
		<form class="navbar-form navbar-left">
			<input type="text" class="form-control col-lg-8" placeholder="Search">
		</form>

		<ul class="nav navbar-nav navbar-right">
			<li><a href="#">Link</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li class="divider"></li>
					<li><a href="#">Separated link</a></li>
				</ul>
			</li>
		</ul>
		-->

	</div>
</div>