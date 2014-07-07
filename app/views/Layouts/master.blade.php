<!doctype html>
<html lang="en">
<head>
	<!--jquery-->	
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<!--jquery-->	
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<!-- twitter bootstrap -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<!-- bootstrap JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	<style>
		.log-in {
			position: relative;
			top: 5px;
			left: 5px;
		}
		.create {
			position: relative;
			top: -30px;
			left: 90px;
		}
		.back {
			position: absolute;
			top: 5px;
			right: 5px;
		}
		.user_email {
			position: relative;
			top:-30px;
			left:5px;
		}
	</style>
    @yield('topscript')
</head>
<body>
	@if (Auth::check())
		<a href="{{action('HomeController@logout')}}" class="log-in btn btn-warning">Log Out</a><br>
		<a href="{{action('PostsController@create')}}" class="create btn btn-primary">Create</a>
		<h4 class="user_email">{{ Auth::user()->email }}</h4>
	@else
		<a href="{{action('HomeController@showLogIn')}}" class="log-in btn btn-success">Log In</a>
	@endif

	@if (Session::has('successMessage'))
	    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif
	@if (Session::has('errorMessage'))
	    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif
	
	<h3><a href="{{action('HomeController@showHome')}}" class="back">Back To Blog Home</a></h3>

    @yield('content')
</body>
</html>

<script>
	setTimeout(function(){
		$('.alert').fadeOut()
	},2000);
</script>