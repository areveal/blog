@extends('layouts.master')

@section('topscript')
	<title>Form Creation</title>
@stop

@section('content')
	@if(isset($post))
		<h1>Edit Post!</h1>
		{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
	@else
		<h1>Create Forms Here!!</h1>
		{{ Form::open(['action' => 'PostsController@store']) }}
	@endif

		{{ Form::label('title','Title:') }}
		{{ $errors->first('title', '<span style="color:red" class="help-block">:message</span>') }}
		{{ Form::text('title', Input::old('title') , ['class' => 'form-control'])  }}

		{{ Form::label('body','Body:') }}
		{{ $errors->first('body', '<span style="color:red" class="help-block">:message</span>') }}
		{{ Form::textarea('body', Input::old('title') , ['class' => 'form-control','rows' => '3']) }}
	
		{{ Form::submit('Submit', ['class' => 'btn btn-success']) }}

	{{ Form::close() }}

	<h3>{{ link_to_action('PostsController@index', 'Back To Posts') }}</h3>

@stop