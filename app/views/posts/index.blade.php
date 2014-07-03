@extends('layouts.master')

@section('topscript')
	<title>Show Table</title>
@stop

@section('content')
	<h1>SHOW ALL THE POSTS!!</h1>

	<table class="table">
		<tr>
			<th>Title</th><th>Last Updated At</th><th></th>
		</tr>
		@foreach ($posts as $post) 
		<tr>
			<td>{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}</td>
			<td>{{{ $post->updated_at->format('F jS Y') }}}</td>
			<td>{{ link_to_action('PostsController@edit', 'Edit', array($post->id), array('class' => 'btn btn-default') )}}</td>
			<td>
				{{ Form::open(['action' => ['PostsController@destroy',$post->id],'method' => 'DELETE']) }}
					{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
				{{ Form::close() }}
			</td>
		</tr>
		@endforeach
	</table>

	@if(!empty($_GET['search']))
		{{ $posts->appends(['search' => $_GET['search']])->links() }}
	@else 
		{{ $posts->links() }}
	@endif

	{{ Form::open(['action' => ['PostsController@index'],'method' => 'GET']) }}
		{{ Form::text('search', null, ['class' => 'form-inline', 'placeholder' => 'Search']) }}
		{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
	{{ Form::close() }}

	<h3>{{ link_to_action('PostsController@create', 'Create New Post') }}</h3>
@stop