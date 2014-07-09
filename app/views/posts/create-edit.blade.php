@extends('layouts.master')

@section('topscript')
	<title>Form Creation</title>

	<link rel="stylesheet" type="text/css" href="/pagedown/demo/browser/demo.css">
@stop

@section('content')
	@if(isset($post))
		<h1>Edit Post!</h1>
		{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT','files' => true)) }}
	@else
		<h1>Create Forms Here!!</h1>
		{{ Form::open(['action' => 'PostsController@store','files' => true]) }}
	@endif

		{{ Form::label('title','Title') }}
		{{ $errors->first('title', '<span style="color:red" class="help-block">:message</span>') }}
		{{ Form::text('title', Input::old('title') , ['class' => 'form-control'])  }}

		{{ Form::file('img')}}

		{{ Form::label('body','Body') }}
		<div class="wmd-panel">
			<div id="wmd-button-bar">
			</div>

			{{ $errors->first('body', '<span style="color:red" class="help-block">:message</span>') }}
			{{ Form::textarea('body', Input::old('body') , ['class' => 'wmd-input','rows' => '3', 'id' => 'wmd-input']) }}
		</div>
	
		{{ Form::submit('Submit', ['class' => 'btn btn-success']) }}

		<div id="wmd-preview" class="wmd-panel wmd-preview"></div>

	{{ Form::close() }}


	<script type="text/javascript" src="/pagedown/Markdown.Converter.js"></script>
    <script type="text/javascript" src="/pagedown/Markdown.Sanitizer.js"></script>
    <script type="text/javascript" src="/pagedown/Markdown.Editor.js"></script>

    <script type="text/javascript">
        (function () {
            var converter1 = Markdown.getSanitizingConverter();
            
            var editor1 = new Markdown.Editor(converter1);
            
            editor1.run();
        })();
    </script>
@stop