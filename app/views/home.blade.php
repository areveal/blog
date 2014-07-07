@extends('layouts.master-blog')

@section('topscript')
	<title>Cole Reveal</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:20;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 500px;
			height: 200px;
			position: relative;
			left: 50%;
			top: 50%;
			margin-left: -250px;
			margin-top: 200px;
			margin-bottom: 50px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
        .btn {
            font-size: 30px;
        }
	</style>

@stop
@section('content')
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Cole Reveal</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="">
                        <a href="{{action('HomeController@showResume')}}">Resume</a>
                    </li>
                    <li class="">
                        <a href="{{action('HomeController@showPortfolio')}}">Portfolio</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


	<div class="welcome">
		<h1>You have arrived.</h1>
        <a href="{{action('HomeController@showResume')}}" class="btn btn-default">Resume</a>
        <a href="{{action('HomeController@showPortfolio')}}" class="btn btn-default">Portfolio</a>
        <a href="{{action('PostsController@index')}}" class="btn btn-default">Blog</a>
	</div>

@stop

