@extends('layouts.master')

@section('topscript')
	<title>Show Index</title>
@stop

@section('content')

	<h2>{{{$post->title}}}</h2>

	<table class="table">
		<tr>
			<th>Body</th><th>Last Updated</th><th>Post Admin Email</th>
		</tr>
		<tr>
			<td>{{{ $post->body }}}</td>
			<td>{{{ $post->updated_at->format('l, F jS Y @ h:i:s A') }}}</td>
			<td>{{{ $post->user->email }}}</td>
		</tr>
	</table>

	{{ Form::open(['action' => ['PostsController@destroy',$post->id],'method' => 'DELETE', 'id' => $post->id])}}
		{{ Form::button('Delete', ['class' => 'btn btn-danger']) }}
	{{ Form::close() }}

	<h3>{{ link_to_action('PostsController@index', 'Back To Posts') }}</h3>

@stop