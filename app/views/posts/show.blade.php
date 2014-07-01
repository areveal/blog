@extends('layouts.master')

@section('topscript')
	<title>Show Index</title>
@stop

@section('content')
<h1>SHOW JUST THE  ONE POST!!</h1>

<table class="table">
	<tr>
		<th>Title</th><th>Body</th>
	</tr>
	<tr>
		<td>{{{$post->title}}}</td>
		<td>{{{$post->body}}}</td>
	</tr>
</table>
@stop