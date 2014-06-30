@extends('layouts.master')

@section('topscript')
	<title>Form Creation</title>
@stop

@section('content')

<h1>Create Forms Here!!</h1>

<form action="{{{ action('PostsController@store') }}}" method="POST" class="form-horizontal">
	<label for="title">Title:</label>
	<input type="text" name="title" id="title" class="form-control" value="{{{ Input::old('title') }}}">

	<label for="body">Body:</label>
	<textarea id="body" name="body" class="form-control" rows="3">{{{ Input::old('body') }}}</textarea>

	<input type="submit" class="btn btn-success">



</form>
@stop