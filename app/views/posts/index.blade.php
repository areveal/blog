@extends('layouts.master')

@section('topscript')
	<title>Show Table</title>
@stop

@section('content')
	<h1>SHOW ALL THE POSTS!!</h1>

	<table class="table">
		<tr>
			<th>Title</th><th></th>
		</tr>
		@foreach ($posts as $post) 
		<tr>
			<td>{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}</td>
			<td>{{ link_to_action('PostsController@edit', 'Edit', array($post->id),array('class' => 'btn btn-default') )}}</td>
			
			<!-- <td>{{{$post->body}}}</td> -->
		</tr>
		@endforeach
	</table>

	{{ $posts->links() }}

	<h3>{{ link_to_action('PostsController@create', 'Create New Post') }}</h3>
@stop