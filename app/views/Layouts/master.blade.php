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
    @yield('topscript')
</head>
<body>
	@if (Session::has('successMessage'))
	    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif
	@if (Session::has('errorMessage'))
	    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif

    @yield('content')
</body>
</html>

<script>
	setTimeout(function(){
		$('.alert').fadeOut()
	},2000);
</script>