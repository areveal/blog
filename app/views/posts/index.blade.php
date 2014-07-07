@extends('layouts.master')

@section('topscript')
	<title>Show Table</title>
@stop

@section('content')



	<h1>SHOW ALL THE POSTS!!</h1>

	<table class="table table-striped">
		<tr>
			<th>Title</th><th>Last Updated At</th><th>Admin Email</th>@if(Auth::check())<th></th><th></th>@endif
		</tr>
		@foreach ($posts as $post) 
		<tr>
			<td>{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}</td>
			<td>{{{ $post->updated_at->format('F jS Y') }}}</td>
			<td>{{{ $post->user->email }}}</td>
			@if(Auth::check())
			<td>{{ link_to_action('PostsController@edit', 'Edit', array($post->id), array('class' => 'btn btn-default') )}}</td>
			<td>
				{{ Form::open(['action' => ['PostsController@destroy',$post->id],'method' => 'DELETE']) }}
					{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
				{{ Form::close() }}
			</td>
			@endif
		</tr>
		@endforeach
	</table>

	@if(!empty($_GET['search']))
		{{ $posts->appends(['search' => $_GET['search']])->links() }}
	@else 
		{{ $posts->links() }}
	@endif

	{{ Form::open(['action' => ['PostsController@index'],'method' => 'GET']) }}
		<div class="input-group">
			{{ Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Search Blog Posts']) }}
			<div class="input-group-btn">
		        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
		    </div>
		</div>
	{{ Form::close() }}

	<h3>{{ link_to_action('PostsController@create', 'Create New Post') }}</h3>
@stop