@extends('layouts.master')

@section('topscript')
	<title>Whoops</title>
	<style>
		div {
			text-align: center;
		}
		body {
			background-color: #ccc;
		}
	</style>
@stop

@section('content')
<div>
<h1>The page requested was not found</h1>
<p>It may have been panda-jacked....</p>	
<img src="img/panda.jpg">
</div>
@stop