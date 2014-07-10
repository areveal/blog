@extends('layouts.master')

@section('topscript')
	<title>Log-in</title>
	<style>
		body {
		  padding-top: 0px;
		  padding-bottom: 40px;
		  background-color: #eee;
		  color: #fff;
		}

		.form-signin {
		  max-width: 330px;
		  padding: 15px;
		  margin: 0 auto;
		}
		.form-signin .form-signin-heading,
		.form-signin .checkbox {
		  margin-bottom: 10px;
		  color:#fff;
		}
		.form-signin .checkbox {
		  font-weight: normal;
		}
		.form-signin .form-control {
		  position: relative;
		  height: auto;
		  -webkit-box-sizing: border-box;
		     -moz-box-sizing: border-box;
		          box-sizing: border-box;
		  padding: 10px;
		  font-size: 16px;
		}
		.form-signin .form-control:focus {
		  z-index: 2;
		}
		.form-signin input[type="email"] {
		  margin-bottom: -1px;
		  border-bottom-right-radius: 0;
		  border-bottom-left-radius: 0;
		}
		.form-signin input[type="password"] {
		  margin-bottom: 10px;
		  border-top-left-radius: 0;
		  border-top-right-radius: 0;
		}
	</style>
@stop

@section('content')
	<div class="container">
		{{ Form::open(['action' => 'HomeController@doLogIn', 'class' => 'form-signin']) }}
			<h2 class="form-signin-heading">Please Log In</h2>
			<input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
	        <input type="password" name="password" class="form-control" placeholder="Password" required>
			<div class="checkbox">
	          <label>
	            <input type="checkbox" name="remember" value="remember-me"> Remember me
	          </label>
	        </div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		{{ Form::close() }}
    </div>


    <!--   <form class="form-signin" role="form" action={{'HomeController@doLogIn'}}>
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form> -->

@stop
