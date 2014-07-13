@extends('layouts.master')

@section('topscript')
	<title>User Info</title>
	<style>
		.body {
			text-align: center;
		}
	</style>
@stop

@section('content')
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h1 class="intro-text text-center"><strong>{{ $user->email}}</strong>
                </h1>
                @if($user->img_path)
                <hr>
					<img src="{{{$user->img_path}}}" class="img-responsive img-border">
				@endif
                <hr>
                <center class="name">{{$user->first_name . ' ' . $user->last_name}}</center>
                <hr>
    			<center>Date Created: {{{$user->created_at->format('F jS Y')}}}</center>
				<hr>
				<h3><center>Blog Posts Created</center></h3>
				@foreach($user->posts as $post)
					<center>{{ link_to_action('PostsController@show', $post->title, array($post->slug)) }}</center><br>
				@endforeach
    			@if(Auth::check())
					@if(Auth::user()->role == 'admin' || Auth::user()->email == $user->email)
						<center>
							{{ link_to_action('UsersController@edit', 'Edit', array($user->id), array('class' => 'btn btn-default') )}}		
						</center>
						<hr>
					@endif
				@endif
            </div>
        </div>
    </div>
@stop