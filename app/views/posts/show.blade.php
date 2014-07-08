@extends('layouts.blog-post')

@section('topscript')
	<title>Blog Post</title>
	<style>
		.body {
			text-align: center;
		}
	</style>
@stop

@section('NavBlog')
	<li><a href="{{action('PostsController@index')}}">Blog</a></li>
@stop

@section('content')
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">{{ $post->title}}</strong>
                </h2>
                @if($post->img_path)
                <hr>
					<img src="{{{$post->img_path}}}" class="img-responsive img-border img-left">
				@endif
                <hr class="visible-xs">
                <p class="body">{{{$post->body}}}</p>
                <hr>
    			<center>{{{$post->updated_at->format('F jS Y @ h:i:s A')}}}</center>
    			<hr>
				<center>Authored by {{{ $post->user->email }}}</center>	
				@if(Auth::check())
					<hr>
					<center>
						{{ link_to_action('PostsController@edit', 'Edit', array($post->id), array('class' => 'btn btn-default') )}}		
						{{ Form::open(['action' => ['PostsController@destroy',$post->id],'method' => 'DELETE']) }}
							{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
						{{ Form::close() }}	
					</center>
				@endif
            </div>
        </div>
    </div>
@stop