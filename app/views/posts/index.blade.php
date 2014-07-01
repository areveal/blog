@extends('layouts.master')

@section('topscript')
	<title>Show Table</title>
@stop

@section('content')
<h1>SHOW ALL THE POSTS!!</h1>

<table class="table">
	<tr>
		<th>Title</th><th>Body</th>
	</tr>
	@foreach ($posts as $post) 
	<tr>
		<td>{{{$post->title}}}</td>
		<td>{{{$post->body}}}</td>
	</tr>
	@endforeach
</table>
@stop