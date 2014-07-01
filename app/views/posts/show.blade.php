@extends('layouts.master')

@section('topscript')
	<title>Show Index</title>
@stop

@section('content')

<h2>{{{$post->title}}}</h2>

<table class="table">
	<tr>
		<th>Body</th><th>Last Updated</th>
	</tr>
	<tr>
		<td>{{{ $post->body }}}</td>
		<td>{{{ $post->updated_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</td>
	</tr>
</table>

<h3>{{ link_to_action('PostsController@index', 'Back To Posts') }}</h3>

@stop