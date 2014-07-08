@extends('layouts.master')

@section('topscript')
	<title>Form Creation</title>
@stop

@section('content')
	@if(isset($post))
		<h1>Edit Post!</h1>
		{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT','files' => true)) }}
	@else
		<h1>Create Forms Here!!</h1>
		{{ Form::open(['action' => 'PostsController@store','files' => true]) }}
	@endif

		{{ Form::label('title','Title:') }}
		{{ $errors->first('title', '<span style="color:red" class="help-block">:message</span>') }}
		{{ Form::text('title', Input::old('title') , ['class' => 'form-control'])  }}

		{{ Form::file('img')}}

		{{ Form::label('body','Body:') }}
		{{ $errors->first('body', '<span style="color:red" class="help-block">:message</span>') }}
		{{ Form::textarea('body', Input::old('title') , ['class' => 'form-control','rows' => '3']) }}
	
		{{ Form::submit('Submit', ['class' => 'btn btn-success']) }}

	{{ Form::close() }}
@stop