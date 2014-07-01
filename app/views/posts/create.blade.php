@extends('layouts.master')

@section('topscript')
	<title>Form Creation</title>
@stop

@section('content')

	<h1>Create Forms Here!!</h1>
	{{ $errors->first('title', '<span class="help-block">:message</span>') }}
	{{ $errors->first('body', '<span class="help-block">:message</span>') }}
	
	{{ Form::open(['action' => 'PostsController@store']) }}

		{{ Form::label('title','Title:') }}
		{{ Form::text('title', Input::old('title') , ['class' => 'form-control'])  }}

		{{ Form::label('body','Body:') }}
		{{ Form::textarea('body', Input::old('title') , ['class' => 'form-control','rows' => '3']) }}
	
		{{ Form::submit('Submit', ['class' => 'btn btn-success']) }}

	{{ Form::close() }}

	<h3>{{ link_to_action('PostsController@index', 'Back To Posts') }}</h3>

@stop