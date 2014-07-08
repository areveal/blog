@extends('layouts.blog-post')

@section('topscript')
	<title>Blog Home</title>
	<style>
		.search {
			position: absolute;
			top: 0px;
			left: 0px;
		}
		.create {
			position: absolute;
			top: 40px;
			right: 5px;
		}
	</style>
@stop

@section('NavBlog')
	<!--Intentionally left empty-->
@stop


@section('content')
	@foreach($posts as $post)
	    <div class="row">
	        <div class="box">
	            <div class="col-lg-12">
	                <hr>
	                <h2 class="intro-text text-center">{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}</strong>
	                </h2>
	                @if($post->img_path)
	                <hr>
						<img src="{{{$post->img_path}}}" class="img-responsive img-border img-left">
					@endif
	                <hr class="visible-xs">
	                <p>{{{$post->body}}}</p>
	            </div>
	        </div>
	    </div>
	@endforeach

	@if(!empty($_GET['search']))
		{{ $posts->appends(['search' => $_GET['search']])->links() }}
	@else 
		{{ $posts->links() }}
	@endif

	{{ Form::open(['action' => ['PostsController@index'],'method' => 'GET']) }}
		<div class="input-group search">
			{{ Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Search Blog Posts']) }}
			<div class="input-group-btn">
		        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
		    </div>
		</div>
	{{ Form::close() }}
	
	@if(Auth::check())
		{{ link_to_action('PostsController@create', 'Create New Post', null, array('class' => 'btn btn-default create') ) }}
	@endif

@stop



@section('content')
@stop