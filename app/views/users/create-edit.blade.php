@extends('layouts.master')

@section('topscript')
	<title>User Profile Editing</title>
@stop

@section('content')

	@if(isset($user))
		<h1>Edit User!</h1>
		{{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'PUT','files' => true)) }}
	@else
		<h1>Create User</h1>
		{{ Form::open(['action' => 'UsersController@store','files' => true]) }}
	@endif

		{{ Form::label('email','Email') }}
		{{ $errors->first('email', '<span style="color:red" class="help-block">:message</span>') }}
		{{ Form::text('email', Input::old('email') , ['class' => 'form-inline'])  }}

		{{ Form::label('first_name','First Name') }}
		{{ $errors->first('first_name', '<span style="color:red" class="help-block">:message</span>') }}
		{{ Form::text('first_name', Input::old('first_name') , ['class' => 'form-inline'])  }}

		{{ Form::label('last_name','Last Name') }}
		{{ $errors->first('last_name', '<span style="color:red" class="help-block">:message</span>') }}
		{{ Form::text('last_name', Input::old('last_name') , ['class' => 'form-inline'])  }}

		{{ Form::label('role','Role') }}
		{{ $errors->first('role', '<span style="color:red" class="help-block">:message</span>') }}
		{{ Form::text('role', Input::old('role') , ['class' => 'form-inline'])  }}		

		{{ Form::label('password','New Password') }}
		{{ $errors->first('password', '<span style="color:red" class="help-block">:message</span>') }}
		{{ Form::password('password', Input::old('password') , ['class' => 'form-control']) }}
		
		{{ Form::file('img')}}
		
		{{ Form::submit('Submit', ['class' => 'btn btn-success']) }}

	{{ Form::close() }}

@stop