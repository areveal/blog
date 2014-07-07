@extends('layouts.master')

@section('topscript')
	<title>Show Index</title>

@stop

@section('content')

	<h2>{{{$post->title}}}</h2>

	<table class="table">
		<tr>
			<th>Body</th><th>Last Updated</th><th>Admin Email</th>
		</tr>
		<tr>
			<td>{{{ $post->body }}}</td>
			<td>{{{ $post->updated_at->format('l, F jS Y @ h:i:s A') }}}</td>
			<td>{{{ $post->user->email }}}</td>
		</tr>
	</table>
	@if(Auth::check())
		{{ Form::open(['action' => ['PostsController@destroy',$post->id],'method' => 'DELETE']) }}
			{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
		{{ Form::close() }}
	@endif

	<h3>{{ link_to_action('PostsController@index', 'Back To Posts') }}</h3>

@stop